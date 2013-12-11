-- 1. What query would you run to get all the countries that speak Slovene. 
-- Your query should return the name of the country, language and language percentage. 
-- You query should arrange the result by language percentage in descending order. (1);
SELECT countries.name AS country_name, languages.language, languages.percentage
FROM countries
LEFT JOIN languages ON countries.id = languages.country_id
WHERE language = 'Slovene';
-- 
-- 2. What query would you run to display the total number of cities for each country. 
-- Your query should return the name of the country and the total number of cities. 
-- You query should arrange the result by number of cities in descending order. (3)
SELECT countries.name, COUNT(cities.id) AS city_count
FROM countries
LEFT JOIN cities ON countries.id = cities.country_id
GROUP BY countries.id
ORDER BY city_count DESC;

-- 
-- 3. What query would you run to get all the cities in mexico with a population of greater than 500,000. 
-- Your query should arrange the result by population in descending order. (1)
SELECT cities.name AS city_name, cities.population
FROM countries
LEFT JOIN cities ON countries.id = cities.country_id
WHERE countries.name = "Mexico" 
AND cities.population > 500000
ORDER BY cities.population DESC;
-- 
-- 4. What query would you run to get all language in each country with a percentage greater than 89%. 
-- Your query should arrange the result by percentage in descending order. (1)
SELECT countries.name, languages.language, languages.percentage
FROM countries
LEFT JOIN languages ON countries.id = languages.country_id
WHERE languages.percentage > 89
ORDER BY languages.percentage DESC;
-- 
-- 5. What query would you run to get all the countries with Surface Area below 501 and Population greater than 100,000. (2)
SELECT name, population, surface_area
FROM countries
WHERE population > 100000
AND surface_area < 501;
-- 
-- 6. What query would you run to get all Constitutional Monarchy Countries with a capital 
-- greater than 200 and a life expectancy greater than 75 years. (1)
SELECT name AS country_name
FROM countries
WHERE government_form = 'Constitutional Monarchy'
AND capital > 200
AND life_expectancy > 75;
-- 
-- 7. What query would you run to get all the cities of Argentina inside the 
-- Buenos Aires district and have population greater than 500, 000. 
-- The query should return the Country Name, City Name, District and Population. (2)
SELECT countries.name, cities.name, cities.district AS city_district, cities.population AS city_population
FROM countries
LEFT JOIN cities ON countries.id = cities.country_id
WHERE cities.population > 500000
AND cities.district = 'Buenos Aires'
AND countries.name = 'Argentina';

-- 
-- 8. What query would you run to summarize the number of countries in each region. 
-- The query should display the name of the region and the number of countries. 
-- Also, the query should arrange the result by number of countries in descending order. (2)
SELECT region, COUNT(countries.id) AS country_count
FROM countries
GROUP BY region
ORDER BY country_count;


