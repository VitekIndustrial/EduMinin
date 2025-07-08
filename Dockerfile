FROM golang:1.24.4

WORKDIR /app

COPY . ./

RUN go mod download

RUN go build -o ./my_app ./cmd/app/.

CMD ["/my_app"]