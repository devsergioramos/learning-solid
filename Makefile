up-carrinho:
	docker-compose -f app_carrinho_compras/docker-compose.yml up --build

ci-carrinho:
	cd app_carinho_compras/ && docker run --rm -v $(pwd):/app composer/composer -- install && cd ..
