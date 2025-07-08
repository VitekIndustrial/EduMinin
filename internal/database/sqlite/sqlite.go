package sqlite

import (
	"database/sql"

	"github.com/SaTeR151/EduMinin/internal/config"
)

type SQLiteManagerDB interface {
}

type SQLiteManager struct {
	db *sql.DB
}

func Open(sqliteConfig config.SQLiteConfig) (*SQLiteManager, func() error, error) {
	var sqliteManger SQLiteManager

	return &sqliteManger, sqliteManger.db.Close, nil
}
