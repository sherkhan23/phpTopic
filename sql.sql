-- DDL (Data Definition Language) 
-- create, alter, drop, rename, comment
drop table Documents;
create table Documents(
	docId int,
    docType varchar(255),
    regsiterDate date
);

alter table Documents drop column regsiterDate;
ALTER TABLE Documents rename docType to docTypes;

-- DML (Data Manipulation Language)
-- SELECT, INSERT INTO, DELETE, UPDATE

insert into Documents values(1, 'Договор'), (2, 'Акт'), (3, 'Исходящие');
select * from Documents;
delete from Documents where docTypes = 'Договор';
update Documents SET docTypes = 'Договоры' WHERE docId = 1;


-- 1. Кластеризованные индексы
SELECT *
FROM Documents
WHERE docId = 3;

-- 2. Декластеризованные индексы
CREATE INDEX documents_types
ON Documents(docTypes);

select *
FROM Documents
WHERE docTypes = 'Акт';
