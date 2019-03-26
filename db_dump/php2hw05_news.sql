CREATE TABLE news (
  id        bigint UNSIGNED AUTO_INCREMENT,
  title     varchar(100) NOT NULL,
  content   text         NULL,
  author_id int          NULL,
  CONSTRAINT id
    UNIQUE (id)
);

ALTER TABLE news
  ADD PRIMARY KEY (id);

INSERT INTO php2hw05.news (title, content, author_id) VALUES ('Кибермошенники украли одну из крупнейших групп в «Одноклассниках»', 'Житель Москвы обратился в полицию из-за украденной группы в «Одноклассниках». Об этом он во вторник, 5 марта, рассказал «Ленте.ру».

Как утверждает Алексей Филлипов, он создал группу «Дачники» в 2008 году, за десять лет существования она набрала почти 900 тысяч подписчиков и стала одной из крупнейших в соцсети. Группа являлась для его семьи одним из источников дохода, поскольку в ней активно размещалась реклама. Но в конце февраля паблик похитили злоумышленники.', 3);
INSERT INTO php2hw05.news (title, content, author_id) VALUES ('Упавший с крыши снег оставил мэра российского города без машины', 'В Якутске пласт снега обрушился с крыши дома на служебный автомобиль мэра города Сарданы Авксентьевой, сообщает РИА Новости со ссылкой на департамент по связям с общественностью администрации городского округа.

В результате инцидента никто не пострадал, но машину — Toyota Camry — пришлось отправить в ремонтный сервис. Автомобиль был застрахован, заявили агентству в мэрии.', 1);
INSERT INTO php2hw05.news (title, content, author_id) VALUES ('Венесуэла выдворила европейского посла', 'Министерство иностранных дел Венесуэлы объявило посла Германии в Каракасе Даниэля Кринера персоной нон-грата. Об этом сообщает «Интерфакс» в среду, 6 марта.', 2);
INSERT INTO php2hw05.news (title, content, author_id) VALUES ('Российский депутат обвинил в проблемах малоимущих самих малоимущих', 'Депутат Волгоградской областной думы от партии «Единая Россия» Гасан Набиев заявил, что пенсии в восемь тысяч рублей получают «тунеядцы и алкаши», которые сами виноваты в своем материальном положении. Об этом сообщает ИА «Высота 102».', null);