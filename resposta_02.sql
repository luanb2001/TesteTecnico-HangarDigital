SELECT u.user_name, u.user_city, u.user_country, o.order_total, o.order_date 
FROM orders AS o 
JOIN user AS u 
ON u.user_id = o.order_user_id
WHERE u.user_id IN (1,3,5)
ORDER BY u.user_name;