



---------問②-----
SELECT * FROM store_table ORDER BY store_nameabc ASC

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
