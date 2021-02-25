CREATE VIEW v_products_suppliers AS
	Select p.id, p.product_code, p.product_name, p.category, p.list_price, 
			p.discontinued, p.quantity_per_unit, p.standard_cost,
			s.company, s.first_name, s.email_address 
	from products as p
	inner join suppliers s on p.supplier_ids = s.id ;
	
SELECT * FROM v_products_suppliers order by id DESC;

Select DISTINCT company FROM suppliers