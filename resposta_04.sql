SELECT SUM(o.order_total), u.user_country 
FROM orders AS o 
JOIN user AS u 
ON o.order_user_id = u.user_id
GROUP BY u.user_country;