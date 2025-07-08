package config

import (
	"os"

	"github.com/sirupsen/logrus"
)

type ServerConfig struct {
	Port string
	Web  string
}

type SQLiteConfig struct {
	DBFilePath string
}

func GetServerConfig() ServerConfig {
	var serverConfig ServerConfig
	var ok bool
	serverConfig.Port, ok = os.LookupEnv("SERVER_PORT")
	if !ok {
		logrus.Warn("server port not found")
	}
	serverConfig.Web, ok = os.LookupEnv("SERVER_WEB_PATH")
	if !ok {
		logrus.Warn("server static path not found")
	}
	return serverConfig
}

func GetSQLiteConfig() SQLiteConfig {
	var sqliteConfig SQLiteConfig
	var ok bool
	sqliteConfig.DBFilePath, ok = os.LookupEnv("SQLITEFILEPATH")
	if !ok {
		logrus.Warn("sqlite file path not found")
	}
	return sqliteConfig
}

func InitLoggerConfig() {
	logrus.SetFormatter(&logrus.TextFormatter{FullTimestamp: true})
	lvl, ok := os.LookupEnv("LOG_LEVEL")

	if !ok {
		lvl = "debug"
	}

	ll, err := logrus.ParseLevel(lvl)
	if err != nil {
		ll = logrus.DebugLevel
	}

	logrus.SetLevel(ll)
}
