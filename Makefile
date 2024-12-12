NAME = Inception

$(NAME):
			docker-compose up -d --build

stop:
		docker-compose stop

down:
		docker-compose down

restart:
		docker-compose restart

logs:
		docker-compose logs

ps:
		docker-compose ps

clean:
		docker system prune -f

