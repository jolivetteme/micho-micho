SET autocommit = 0;
START TRANSACTION; 

LOCK TABLES transactions WRITE

INSERT INTO transations (total) VALUES(0.00);
SELECT @id_trans := MAX(id) FROM transations;

INSERT INTO sales (id_products, id_users, id_transactions) VALUES($product_id,$user_id,@id_trans);

SELECT @total := sum(price) FROM products INNER JOIN sales ON sales.id_products=products.id WHERE sales.id_transactions=@id_trans;

UPDATE transactions SET price=@total WHERE id=@id_trans;

COMMIT;