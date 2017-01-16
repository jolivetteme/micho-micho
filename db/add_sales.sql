# Add random sales for existing USERS
INSERT INTO sales (id_products, id_users, id_transactions)
VALUES (
	# Random  (Products)
	(SELECT cast(ROUND(RAND() * (8-1) + 1) AS UNSIGNED) AS number),
	# Get random  (Users)
 	(SELECT cast(ROUND(RAND() * (42-23) + 23) AS UNSIGNED) AS number),
 	# Random (Transactions)
 	(SELECT cast(ROUND(RAND() * (55-5) + 5) AS UNSIGNED) AS number)
 	);
##################################################################
##################################################################
INSERT INTO sales (id_products, id_users, id_transactions)
VALUES ((SELECT cast(ROUND(RAND() * (8-1) + 1) AS UNSIGNED) AS number),(SELECT cast(ROUND(RAND() * (42-23) + 23) AS UNSIGNED) AS number),(SELECT cast(ROUND(RAND() * (55-5) + 5) AS UNSIGNED) AS number));
UPDATE transactions SET price = (SELECT SUM(price) FROM products INNER JOIN sales ON products.id=sales.id_products) WHERE id = 1;