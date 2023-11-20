"""
author: victorakinode@gmail.com
"""

question_one = """
SELECT txn_type, COUNT(*) AS transaction_count
FROM raw.transactions
WHERE ticker = 'BTC' AND (txn_type = 'BUY' OR txn_type = 'SELL')
GROUP BY ticker, txn_type;
"""

question_two = """
SELECT
  TO_CHAR(TO_DATE(txn_date, 'YYYY-MM-DD'), 'YYYY') AS txn_year,
  SUM(CASE WHEN txn_type = 'BUY' THEN 1 ELSE 0 END) AS total_buy_transactions,
  SUM(CASE WHEN txn_type = 'SELL' THEN 1 ELSE 0 END) AS total_sell_transactions,
  COUNT(*) AS total_transactions
FROM raw.transactions
WHERE ticker = 'BTC'
  AND EXTRACT(YEAR FROM TO_DATE(txn_date, 'YYYY-MM-DD')) BETWEEN 2017 AND 2021
GROUP BY txn_year
ORDER BY txn_year;
"""

question_three = """
SELECT
  TO_CHAR(TO_DATE(txn_date, 'YYYY-MM-DD'), 'YYYY') AS txn_year,
  txn_type,
  COUNT(*) AS txn_count,
  SUM(quantity) AS total_quantity,
  AVG(quantity) AS average_quantity
FROM raw.transactions
WHERE ticker = 'BTC'
  AND EXTRACT(YEAR FROM TO_DATE(txn_date, 'YYYY-MM-DD')) BETWEEN 2017 AND 2021
GROUP BY txn_year, txn_type
ORDER BY txn_year, txn_type;
"""

question_four= """
SELECT
  m.first_name,
  SUM(CASE WHEN t.ticker = 'BTC' THEN t.quantity ELSE 0 END) AS total_quantity
FROM raw.members m
JOIN raw.transactions t ON m.member_id = t.member_id
GROUP BY m.member_id, m.first_name
ORDER BY total_quantity DESC
LIMIT 3;
"""