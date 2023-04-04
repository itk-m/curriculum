
---------問①-----
SELECT store_name AS 店舗名 FROM store_table

---------問②-----
SELECT * FROM store_table ORDER BY store_nameabc ASC

---------問③-----
SELECT store_table.store_name , stock_table.quantity , goods_table.goods_name
FROM stock_table
INNER JOIN store_table ON stock_table.store_code = store_table.store_code
INNER JOIN goods_table ON stock_table.goods_code = goods_table.goods_code

---------問④-----
SELECT AVG(price) FROM goods_table

---------問⑤-----
SELECT store_code FROM stock_table
WHERE quantity > (SELECT AVG(quantity) FROM stock_table WHERE store_code = 'EA01')

---------問⑥-----
INSERT INTO store_table
(goods_code , goods_name , price , update_day)
VALUES
("M001" , "マフラー" , 4500 , "2023-4-3");

---------問⑦-----
UPDATE stock_table set quantity = 10 , update_day = '2023-4-3'
WHERE store_code = 'S987' AND store_code = 'EA01'

---------問⑧-----
DELETE FROM stock_table
WHERE goods_code = 'S987' AND store_code = 'EA01'