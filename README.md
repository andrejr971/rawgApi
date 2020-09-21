# RAWGAPI - Consumo api da [RAWG](https://api.rawg.io/docs)
Esta aplicação tem como finalidade consumir dados fornecidas pela [RAWG](https://api.rawg.io/docs)
através da linguagem PHP.

Link para o [wireframe](https://www.figma.com/file/lmuHQLVD3AJJStxZOK1OEb/API?node-id=8%3A0)

**TELA INICIAL**
![Screenshot_20200921_172311](https://user-images.githubusercontent.com/49952031/93822824-2dcc8380-fc37-11ea-9e5d-f828fc619af4.png)

-Na home foi usado o metódo GET: https://api.rawg.io/api/games
  - listando todos os jogos cadastrados

**INFO GAMES**
![screencapture-teste-ebsistema-pages-game-index-php-2020-09-21-18_25_47](https://user-images.githubusercontent.com/49952031/93823286-f27e8480-fc37-11ea-88cc-07bf23faf48e.png)

-Nas informações do jogo foi usado o metódo GET: https://api.rawg.io/api/games/{game_pk}
  - e para mostrar os screenshots foi usado o metódo GET: https://api.rawg.io/api/games/{game_pk}/screenshots
  
**PESQUISA**
![screencapture-teste-ebsistema-pages-search-index-php-2020-09-21-18_30_57](https://user-images.githubusercontent.com/49952031/93823831-ddeebc00-fc38-11ea-86a7-e8c86429cd51.png)
  
- Na pesquisa foi usado o metódo GET: https://api.rawg.io/api/games?search=name_game
    - passando como parâmetro o nome do jogo

**GÊNEROS**
![screencapture-teste-ebsistema-pages-genres-index-php-2020-09-21-18_44_18](https://user-images.githubusercontent.com/49952031/93825124-024b9800-fc3b-11ea-94a3-c5de79b91ef9.png)

- Nos gêneros foi consumido: https://api.rawg.io/api/genres para pegar os gêneros
- E para o filtro, foi passado como parâmetro o id do gênero ('mas poderia ser o slug do gênero'): https://api.rawg.io/api/games?genres={id} 
