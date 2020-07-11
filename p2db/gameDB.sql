-- DROP TABLE player;

CREATE TABLE player
(
	player_id SERIAL PRIMARY KEY,
	player_name VARCHAR(30) NOT NULL,
	realm VARCHAR(30) NOT NULL,
	race VARCHAR(30) NOT NULL,
	class_type VARCHAR(30) NOT NULL, 
	faction VARCHAR(30) NOT NULL,
	first_prof VARCHAR(30),
	second_prof VARCHAR(30)
);


INSERT INTO player (player_name, realm, race, class_type, faction, first_prof, second_prof)
VALUEs ('Chindeh', 'Orc', 'Zangarmarsh', 'Hord', 'Warrior', 'Blacksmithing', 'Mining'),
	('Yisdaya', 'Human', 'Drenden', 'Alliance', 'Hunter', 'Leather Working', 'Skinning'),
	('Miacoh', 'Blood Elf', 'Zangarmarsh', 'Hord', 'Paladin', 'Alchemy', 'Herbalism'),
	('Jishca', 'Pandaren', 'Zangarmarsh', 'Hord', 'Monk', 'Tailoring', 'Mining'),
	('Nellie', 'Troll', 'Zangarmarsh', 'Hord', 'Rogue', 'Leather Working', 'Skinning'),
	('Jessie', 'Undead', 'Zangarmarsh', 'Hord', 'Warlock', 'Alchemy', 'Herbalism'),
	('Jiangu', 'Worgen', 'Drenden', 'Alliance', 'Mage', 'Tailoring', 'Herbalism'),
	('Zugore', 'Tauren', 'Zangarmarsh', 'Hord', 'Shaman', 'Mining', 'Herbalism'),
	('Sinda', 'Night Elf', 'Drenden', 'Alliance', 'Priest', 'Jewel Crafting', 'Mining'),
	('Katong', 'Gnome', 'Drenden', 'Alliance', 'Rogue', 'Engineering', 'Mining');


