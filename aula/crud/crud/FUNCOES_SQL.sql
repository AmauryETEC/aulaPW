-- Listar o total de empregados que estão alocados em departamentos.

SELECT COUNT(DEPARTAMENTO_CODIGO)
FROM EMPREGADO;

-- Listar o total empregado que estão alocados ao departamento 40.

SELECT COUNT(*)
FROM EMPREGADO
WHERE DEPARTAMENTO_CODIGO = 40;

-- Listar o total dos salários dos empregados

SELECT SUM(SALARIO)
FROM EMPREGADO;

-- Listar o total dos salários dos empregados do departamento 40
SELECT SUM(SALARIO)
FROM EMPREGADO
WHERE DEPARTAMENTO_CODIGO = 40;

-- Listar a média dos salários dos empregados que estão alocados no
-- departamento 40

SELECT AVG(SALARIO)
FROM EMPREGADO
WHERE DEPARTAMENTO_CODIGO = 40;

-- Listar o maior salário dos empregados que estão alocados no departamento
-- 40

SELECT MAX(SALARIO)
FROM EMPREGADO
WHERE DEPARTAMENTO_CODIGO = 40;

-- Listar o menor salário dos empregados que estão alocados no departamento
-- 40

SELECT MIN(SALARIO)
FROM EMPREGADO
WHERE DEPARTAMENTO_CODIGO = 40;