--creating the database
CREATE DATABASE lemonadeMaker;

--Connect to the database
\c lemonadeMaker;

--Removes public user table
DROP TABLE public.user;

--Recreate public user table
CREATE TABLE public.user
(
    id            SERIAL        NOT NULL   PRIMARY KEY,
    username      VARCHAR(100)  NOT NULL   UNIQUE,
    password      VARCHAR(100)  NOT NULL,
    display_name  VARCHAR(100)  NOT NULL,
    email         VARCHAR(100)  NOT NULL   UNIQUE        
);

--Address table 
CREATE TABLE public.address
(
    address_id   SERIAL       NOT NULL PRIMARY KEY,
    id           INT          NOT NULL REFERENCES public.user(id),
    city         VARCHAR(100) NOT NULL,
    street       VARCHAR(100) NOT NULL, 
    aptNum       VARCHAR(100),
    zipCode      INT          NOT NULL
);

--Credit Card Table
CREATE TABLE public.credit_card
(
    credit_card_id   SERIAL       NOT NULL PRIMARY KEY, 
    id               INT          NOT NULL REFERENCES public.user(id),
    firstName        VARCHAR(100) NOT NULL, 
    lastName         VARCHAR(100) NOT NULL, 
    cc_Num           INT          NOT NULL, 
    cc_expDate       DATE         NOT NULL, 
    cc_CVC           INT          NOT NULL
);

--table of preferences
CREATE TABLE public.preferences(
    prefCart   SERIAL NOT NULL PRIMARY KEY, 
    id         INT    NOT NULL REFERENCES public.user(id),
    lemon_id   INT    NOT NULL REFERENCES public.lemonades(lemon_id)
);

--Lemonades 
CREATE TABLE public.lemonades(
    lemon_id  SERIAL       NOT NULL PRIMARY KEY,
    title     VARCHAR(100) NOT NULL, 
    vid_link  VARCHAR(200) NOT NULL, 
    img       VARCHAR(50)  NOT NULL, 
    recipt    VARCHAR(200) NOT NULL
);