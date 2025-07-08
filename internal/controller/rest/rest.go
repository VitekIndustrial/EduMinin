package rest

import (
	eventsmanager "github.com/SaTeR151/EduMinin/internal/services/eventsManager"
	"github.com/gin-gonic/gin"
)

func PostEvents(em eventsmanager.EventsManagerService) gin.HandlerFunc {
	return func(c *gin.Context) {

	}
}

func GetEventList(em eventsmanager.EventsManagerService) gin.HandlerFunc {
	return func(c *gin.Context) {

	}
}

func DeleteEvent(em eventsmanager.EventsManagerService) gin.HandlerFunc {
	return func(c *gin.Context) {

	}
}
