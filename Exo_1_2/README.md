Exercício 1
Em um arquivo PHP, insira o seguinte código:
echo "Neste momento, o timestamp é: ", time(),"<br>"
A função time() retorna o timestamp atual (o timestamp é definido como o sistema de timestamp que fornece o número de vezes em segundos que se passaram desde 1º de janeiro de 1970 às 00:00).
Usando a função date(), determine a data e a hora do carimbo de data/hora anterior.


Exercício 2
Calcule sua idade para o segundo mais próximo
Uma pista?
Veja a função mktime().



Exercício 3
Verifique se a data de 29 de fevereiro de 1962 realmente existiu.
Se a data existia, então "29 de fevereiro de 1962: data válida" é exibido e, inversamente, "29 de fevereiro de 1962: data inválida".
Uma pista?
Veja a função checkdate().


Exercício 4
Que dia da semana era 3 de março de 1993?
Exiba o resultado em francês.
Uma pista?
Veja as funções mktime() e date().


Exercício 5
Exiba todos os anos bissextos entre 2005 e 2052 (lembrete: um ano bissexto é um ano com 366 dias em vez de 365 para um ano comum.)
Uma pista?
Veja o loop for() e as funções mktime() e date(). Veja também os parâmetros da função date(). Exemplo de data('w')

Exercício 6
Tendo em conta a sua licença remunerada, pretende saber qual o dia 1 de maio entre 2023 e 2030
Se o dia for sábado ou domingo, exiba "Desculpe..."
Se o dia for segunda ou sexta-feira, exiba "É um fim de semana prolongado!"
Uma pista?
Veja o loop for() e as funções mktime() e date().

Exercício 7
Encontre o dia da Páscoa para os anos de 2023 a 2030
Uma pista?
Veja o loop for() e as funções easter_date() e date().

