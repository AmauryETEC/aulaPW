-- listar o total de empregados que eles estão alocados em departamentos

select count(DEPARTAMENTO_CODIGO)
from EMPREGADO;

-- Listar o total empregado que estão alocados ao departamento 40.
select count(*)
from empregado
where DEPARTAMENTO_CODIGO = 40;

-- Listar o total dos salarios dos empregados.
select sum(salario)
from empregado;

-- Listar o total dos salarios dos empregados do departamento 40.
select sum(salario)
from empregado
where DEPARTAMENTO_CODIGO = 40;


-- listar a média dos salários dos empregados que estão alocados no dep. 40
select avg(salario)
from empregado
where departamento_codigo = 40;

-- listar o maior slário dos empregados que estão alocados no dep. 40.
select max(salario) 
from empregado
where DEPARTAMENTO_CODIGO = 40;

-- listar o menor slário dos empregados que estão alocados no dep. 40.
select min(salario) 
from empregado
where DEPARTAMENTO_CODIGO = 40;


-- prova 29/11 -- 
-- round
-- truncate
-- mod
-- like
-- order by
-- group by

-- ordenar o resultado da consulta pelos campos primeiro_nome
-- * pega tudo da tabela --
-- "asc" primeiro para ultimo --
-- "desc" ultimo para primeiro --
select *
from EMPREGADO
order by 2 asc;

-----------------------------------------------------------------------

-- LISTAR O CÓDIGO DO DEPARTAMENTO E A QUANTIDADE DE EMPREGADOS DESSE DEPARTAMENTO QUANDO O DEPARTAMENTO POSSUIR MAIS DE UM EMPREGADO
select DEPARTAMENTO_CODIGO, count(*) as QTDE_EMPREGADO
from EMPREGADO
group by DEPARTAMENTO_CODIGO
having count(*) > 1; 

-- LISTAR O CÓDIGO DO DEPARTAMENTO E A MÉDIA SALARIAL DOS EMPREGADOS DESSE DEPARTAMENTO, QUANDO A MÉDIA SALRIAL DO DEPARTAMENTO DOR MAIOR QUE R$500.00
-- CONSIDERAR APENAS EMPREGADOS COM SALÁRIO MAIOR QUE R$ 350.00
select DEPARTAMENTO_CODIGO, avg(SALARIO) as MEDIA_SALARIAL
from EMPREGADO
where SALARIO > 350.00
group by DEPARTAMENTO_CODIGO
having avg(SALARIO) > 500.00; 

-- O RESULTADO DEVERÁ SER ORDENADO DE FORMA DECRESCENTE EM RELAÇÃO A MÉDIA SALARIAL.
select DEPARTAMENTO_CODIGO, avg(SALARIO) as MEDIA_SALARIAL
from EMPREGADO
where SALARIO > 350.00
group by DEPARTAMENTO_CODIGO
having avg(SALARIO) > 500.00 
order by 2 desc;

