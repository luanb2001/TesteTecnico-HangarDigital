SELECT SUM(o.order_total), o.order_date
FROM orders AS o
JOIN user AS u
ON o.order_user_id = u.user_id
GROUP BY YEAR(o.order_date), MONTH(o.order_date);