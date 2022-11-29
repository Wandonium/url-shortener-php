run:
	mkdir -p mysqldata
	docker-compose build
	docker-compose up -d