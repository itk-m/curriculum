



---------問②-----
SELECT * FROM store_table ORDER BY store_nameabc ASC

---------問④-----
SELECT AVG(price) FROM goods_table

---------問⑤-----
SELECT store_code FROM stock_table
WHERE quantity > (SELECT AVG(quantity) FROM stock_table WHERE store_code = 'EA01')
