# DS-ConsumoAPI 

P1 da matéria Desenvolvimento para Servidores - I, objetivo era consumir uma API de forma que o usuário pudesse interagir. No caso, escolhi a API de consultar Pokemons. A linguagem foi PHP. 

API usada: https://www.canalti.com.br/api/pokemons.json 

 COMO USAR:
 * Envie um nome de pokemon (em inglês), e a API irá retornar os campos abaixo.
 - id
 - num
 - name
 - img
 - type (array, usar for ou foreach para listar todos)
 - height
 - weight
 - candy
 - egg
 - spawn_chance
 - avg_spawns
 - multipliers
 - weaknesses (array, usar for ou foreach para listar todos)
 
 * Para chamar, basta chamar a variável $pokemonAchado['CAMPO'].
 * No caso de arrays, é necessário um loop para imprimir cada array. 
    EXEMPLO DE LOOP:
       foreach($pokemonAchado['type'] as $tipo){
        echo $tipo . " ";
        } 
        



