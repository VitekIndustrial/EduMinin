package main

import (
	"github.com/SaTeR151/EduMinin/internal/config"
	"github.com/SaTeR151/EduMinin/internal/controller/rest"
	"github.com/SaTeR151/EduMinin/internal/database/sqlite"
	eventsmanager "github.com/SaTeR151/EduMinin/internal/services/eventsManager"
	"github.com/gin-gonic/gin"
	"github.com/joho/godotenv"
	"github.com/sirupsen/logrus"
)

func main() {
	godotenv.Load()
	config.InitLoggerConfig()
	sqliteConfig := config.GetSQLiteConfig()
	db, close, err := sqlite.Open(sqliteConfig)
	if err != nil {
		logrus.Error(err)
		return
	}
	defer close()
	eventsmanager := eventsmanager.New(db)
	serverConfig := config.GetServerConfig()

	router := gin.Default()

	router.StaticFile("/", serverConfig.Web)

	router.POST("/api/events", rest.PostEvents(eventsmanager))
	router.DELETE("/api/events", rest.DeleteEvent(eventsmanager))
	router.GET("/api/events", rest.GetEventList(eventsmanager))
	if err := router.Run(":" + serverConfig.Port); err != nil {
		logrus.Error(err)
		return
	}
}
