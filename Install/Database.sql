create table rune_questions
(
	key_question bigint unsigned auto_increment,
	title varchar(250) not null,
	status tinyint unsigned default 1 not null,
	type tinyint unsigned not null,
	program text not null,
	hint text not null,
	tags varchar(100) not null,
	dt timestamp not null,
	data json not null,
	constraint rune_questions_pk
		primary key (key_question)
);

