-- PROCEDURE: public.sp_add_customer(character varying, character varying, character varying)

-- DROP PROCEDURE public.sp_add_customer(character varying, character varying, character varying);

CREATE OR REPLACE PROCEDURE public.sp_add_customer(
	name character varying,
	email character varying,
	phone character varying)
LANGUAGE 'plpgsql'
AS $BODY$
begin
INSERT INTO public."Customer"(
	"Name", "Email", "Phone")
	VALUES (Name, Email,Phone);
	
  commit;
  end;
$BODY$;


-- PROCEDURE: public.sp_add_ingredient(character varying, integer, integer, integer, integer, integer)

-- DROP PROCEDURE public.sp_add_ingredient(character varying, integer, integer, integer, integer, integer);

CREATE OR REPLACE PROCEDURE public.sp_add_ingredient(
	ingredientname character varying,
	provinceid integer,
	userid integer,
	supplierinsertedid integer,
	priceinsertedid integer,
	visibility integer)
LANGUAGE 'plpgsql'
AS $BODY$
DECLARE IngredientInsertedId integer;
begin
INSERT INTO public."Ingredient"(
	"Name","RegionalProvinceId","UserId","SupplierId","PriceId","Visibility")
	VALUES (ingredientName,provinceid,userid,supplierinsertedid,PriceInsertedId,visibility);
	
  commit;
  select Max("IngredientId") into IngredientInsertedId from "Ingredient";
  --SElect SupplierInsertedId
  CALL sp_add_Supplier_Item(IngredientInsertedId, supplierinsertedid);
  end;
$BODY$;


-- PROCEDURE: public.sp_add_only_supplier(character varying, character varying, integer)

-- DROP PROCEDURE public.sp_add_only_supplier(character varying, character varying, integer);

CREATE OR REPLACE PROCEDURE public.sp_add_only_supplier(
	fname character varying,
	address character varying,
	visibility integer)
LANGUAGE 'plpgsql'
AS $BODY$
DECLARE SupplierInsertedId integer;
begin

INSERT INTO public."Supplier"(
	"Name","Address","Visibility")
	VALUES (fName,address,visibility);
	
  commit;
  end;
$BODY$;


-- PROCEDURE: public.sp_add_order_status(character varying)

-- DROP PROCEDURE public.sp_add_order_status(character varying);

CREATE OR REPLACE PROCEDURE public.sp_add_order_status(
	fname character varying)
LANGUAGE 'plpgsql'
AS $BODY$
begin
INSERT INTO public."Order_Status"(
	"Name")
	VALUES (fName);
	
  commit;
  end;
$BODY$;


-- PROCEDURE: public.sp_add_pizza_baker(character varying, character varying)

-- DROP PROCEDURE public.sp_add_pizza_baker(character varying, character varying);

CREATE OR REPLACE PROCEDURE public.sp_add_pizza_baker(
	firstname character varying,
	lastname character varying)
LANGUAGE 'plpgsql'
AS $BODY$
begin
INSERT INTO public."Pizza_Baker"(
	"FirstName", "LastName")
	VALUES (FirstName, LastName);
	
  commit;
  end;
$BODY$;


-- PROCEDURE: public.sp_add_price(character varying, double precision, double precision, double precision, integer, integer, integer, integer, integer)

-- DROP PROCEDURE public.sp_add_price(character varying, double precision, double precision, double precision, integer, integer, integer, integer, integer);

CREATE OR REPLACE PROCEDURE public.sp_add_price(
	ingredientname character varying,
	buyingprice double precision,
	sellingprice double precision,
	buyingquantity double precision,
	availablequantity integer,
	visibility integer,
	provinceid integer,
	supplierid integer,
	userid integer)
LANGUAGE 'plpgsql'
AS $BODY$
DECLARE PriceInsertedId integer;
begin
INSERT INTO public."Price"(
	"Buying_Price","Buying_Quantity","Selling_Price","Available_Quantity")
	VALUES (buyingprice,buyingQuantity,sellingprice,availablequantity);
	
  commit;
  select Max("Price_Id") into PriceInsertedId from "Price";
  --SElect SupplierInsertedId
  CALL sp_add_Ingredient(ingredientName, provinceid, userid, supplierid,PriceInsertedId,visibility);
  end;
$BODY$;


-- PROCEDURE: public.sp_add_regional_province(character varying)

-- DROP PROCEDURE public.sp_add_regional_province(character varying);

CREATE OR REPLACE PROCEDURE public.sp_add_regional_province(
	pname character varying)
LANGUAGE 'plpgsql'
AS $BODY$
begin
INSERT INTO public."Regional_Province"(
	"ProvinceName")
	VALUES (pName);
	
  commit;
  end;
$BODY$;


-- PROCEDURE: public.sp_add_supplier(character varying, character varying, boolean, double precision, integer, double precision, integer, integer, integer, character varying)

-- DROP PROCEDURE public.sp_add_supplier(character varying, character varying, boolean, double precision, integer, double precision, integer, integer, integer, character varying);

CREATE OR REPLACE PROCEDURE public.sp_add_supplier(
	fname character varying,
	address character varying,
	visibility boolean,
	buyingprice double precision,
	buyingquantity integer,
	sellingprice double precision,
	availablequantity integer,
	provinceid integer,
	userid integer,
	ingredientname character varying)
LANGUAGE 'plpgsql'
AS $BODY$
DECLARE SupplierInsertedId integer;
begin

INSERT INTO public."Supplier"(
	"Name","Address","Visibility")
	VALUES (fName,address,visibility);
	
  commit;

  select Max("SupplierId") into SupplierInsertedId from "Supplier";
  --SElect SupplierInsertedId
  CALL sp_add_price(buyingprice, buyingquantity, sellingprice, availablequantity,ProvinceId,UserId,SupplierInsertedId,ingredientName,visibility);
  end;
$BODY$;


-- PROCEDURE: public.sp_add_supplier_item(integer, integer)

-- DROP PROCEDURE public.sp_add_supplier_item(integer, integer);

CREATE OR REPLACE PROCEDURE public.sp_add_supplier_item(
	ingredientinsertedid integer,
	supplierdata_id integer)
LANGUAGE 'plpgsql'
AS $BODY$
begin
INSERT INTO public."Supplier_Item"(
	"IngredientId","SupplierId")
	VALUES (IngredientInsertedId,supplierdata_id);
  commit;
  end;
$BODY$;


-- PROCEDURE: public.sp_change_ingredient(integer, character varying, integer, integer, integer, integer)

-- DROP PROCEDURE public.sp_change_ingredient(integer, character varying, integer, integer, integer, integer);

CREATE OR REPLACE PROCEDURE public.sp_change_ingredient(
	editingredientid integer,
	editingredientname character varying,
	editprovince_id integer,
	supplierdata_id integer,
	editingredient_visibility integer,
	itemid integer)
LANGUAGE 'plpgsql'
AS $BODY$
DECLARE IngredientInsertedId integer;
begin
update "Ingredient"
	set "Name"=Editingredientname,"Visibility"=EditIngredient_visibility,"RegionalProvinceId"=EditProvince_Id
	,"SupplierId"=SupplierData_Id where "IngredientId"=editingredientid;
	
  commit;
  --select Max("IngredientId") into IngredientInsertedId from "Ingredient";
  --SElect SupplierInsertedId
   CALL sp_change_Supplier_Item(EditingredientId, SupplierData_Id,ItemId);
  end;
$BODY$;


-- PROCEDURE: public.sp_change_only_supplier(integer, character varying, character varying, integer)

-- DROP PROCEDURE public.sp_change_only_supplier(integer, character varying, character varying, integer);

CREATE OR REPLACE PROCEDURE public.sp_change_only_supplier(
	supplierid integer,
	fname character varying,
	address character varying,
	visibility integer)
LANGUAGE 'plpgsql'
AS $BODY$
begin

update "Supplier"
	set "Name"=fname,"Address"=address,"Visibility"=visibility where "SupplierId"=supplierId;
  commit;

 -- CALL sp_Change_price(priceId,buyingprice, buyingquantity, sellingprice, availablequantity,ingredientId,ingredientName,visibility);
  end;
$BODY$;


-- PROCEDURE: public.sp_change_price(integer, integer, integer, integer, double precision, integer, double precision, integer, integer, character varying, integer)

-- DROP PROCEDURE public.sp_change_price(integer, integer, integer, integer, double precision, integer, double precision, integer, integer, character varying, integer);

CREATE OR REPLACE PROCEDURE public.sp_change_price(
	editingredientid integer,
	editprice_id integer,
	editprovince_id integer,
	supplierdata_id integer,
	editbuyingprice double precision,
	editbuyingquantity integer,
	editsellingprice double precision,
	editavailablequantity integer,
	editingredient_visibility integer,
	editingredientname character varying,
	itemid integer)
LANGUAGE 'plpgsql'
AS $BODY$
--DECLARE PriceInsertedId integer;
begin
update "Price"
	set "Buying_Price"=EditbuyingPrice,"Buying_Quantity"=EditbuyingQuantity,"Selling_Price"=EditsellingPrice,"Available_Quantity"=EditavailableQuantity where "Price_Id"=EditPrice_Id;
  commit;
 -- select Max("Price_Id") into PriceInsertedId from "Price";
  --SElect SupplierInsertedId
  CALL sp_Change_Ingredient(EditingredientId,Editingredientname,EditProvince_Id,SupplierData_Id,EditIngredient_visibility,ItemId);
  end;
$BODY$;


-- PROCEDURE: public.sp_change_supplier(integer, character varying, character varying, boolean, integer, double precision, integer, double precision, integer, integer, character varying)

-- DROP PROCEDURE public.sp_change_supplier(integer, character varying, character varying, boolean, integer, double precision, integer, double precision, integer, integer, character varying);

CREATE OR REPLACE PROCEDURE public.sp_change_supplier(
	supplierid integer,
	fname character varying,
	address character varying,
	visibility boolean,
	priceid integer,
	buyingprice double precision,
	buyingquantity integer,
	sellingprice double precision,
	availablequantity integer,
	ingredientid integer,
	ingredientname character varying)
LANGUAGE 'plpgsql'
AS $BODY$
begin

update "Supplier"
	set "Name"=fname,"Address"=address,"Visibility"=visibility where "SupplierId"=supplierId;
  commit;

 -- CALL sp_Change_price(priceId,buyingprice, buyingquantity, sellingprice, availablequantity,ingredientId,ingredientName,visibility);
  end;
$BODY$;


-- PROCEDURE: public.sp_change_supplier_item(integer, integer, integer)

-- DROP PROCEDURE public.sp_change_supplier_item(integer, integer, integer);

CREATE OR REPLACE PROCEDURE public.sp_change_supplier_item(
	editingredientid integer,
	supplierdata_id integer,
	itemid integer)
LANGUAGE 'plpgsql'
AS $BODY$
begin
	update "Supplier_Item"
	set "IngredientId"=EditingredientId,"SupplierId"=SupplierData_Id where "ItemId"=ItemId ;
  commit;
  end;
$BODY$;


-- PROCEDURE: public.sp_delete_ingredient(integer, integer)

-- DROP PROCEDURE public.sp_delete_ingredient(integer, integer);

CREATE OR REPLACE PROCEDURE public.sp_delete_ingredient(
	priceid integer,
	ingredientid integer)
LANGUAGE 'plpgsql'
AS $BODY$
begin
Delete from  "Ingredient"
	 where "IngredientId"=IngredientId;
	
  commit;
   CALL sp_delete_price(PriceId);
  end;
$BODY$;


-- PROCEDURE: public.sp_delete_only__supplier(integer)

-- DROP PROCEDURE public.sp_delete_only__supplier(integer);

CREATE OR REPLACE PROCEDURE public.sp_delete_only__supplier(
	supplierid integer)
LANGUAGE 'plpgsql'
AS $BODY$
begin
Delete from  "Supplier"
	 where "SupplierId"=supplierId;
	
  commit;
 --  CALL sp_delete_price(priceId, ingredientId);
  end;
$BODY$;


-- PROCEDURE: public.sp_delete_price(integer)

-- DROP PROCEDURE public.sp_delete_price(integer);

CREATE OR REPLACE PROCEDURE public.sp_delete_price(
	priceid integer)
LANGUAGE 'plpgsql'
AS $BODY$
--DECLARE SupplierInsertedId integer;
begin

Delete from  "Price"
	 where "Price_Id"=priceid;
	
  commit;

 -- select Max("SupplierId") into SupplierInsertedId from "Supplier";
  --SElect SupplierInsertedId
--  CALL sp_delete_ingredient(ingredientId);
  end;
$BODY$;


-- PROCEDURE: public.sp_delete_supplier(integer, integer, integer)

-- DROP PROCEDURE public.sp_delete_supplier(integer, integer, integer);

CREATE OR REPLACE PROCEDURE public.sp_delete_supplier(
	supplierid integer,
	priceid integer,
	ingredientid integer)
LANGUAGE 'plpgsql'
AS $BODY$
begin
Delete from  "Price"
	 where "SupplierId"=supplierId;
	
  commit;
   CALL sp_delete_price(priceId, ingredientId);
  end;
$BODY$;


-- PROCEDURE: public.sp_delete_supplier_item(integer, integer, integer)

-- DROP PROCEDURE public.sp_delete_supplier_item(integer, integer, integer);

CREATE OR REPLACE PROCEDURE public.sp_delete_supplier_item(
	itemid integer,
	ingredientid integer,
	priceid integer)
LANGUAGE 'plpgsql'
AS $BODY$
DECLARE SupplierInsertedId integer;
begin

Delete from  "Supplier_Item"
	 where "ItemId"=ItemId;
	
  commit;

 -- select Max("SupplierId") into SupplierInsertedId from "Supplier";
  --SElect SupplierInsertedId
  CALL sp_delete_ingredient(PriceId, IngredientId);
  end;
$BODY$;


-- PROCEDURE: public.sp_restoke_price(integer, double precision, integer, double precision, integer)

-- DROP PROCEDURE public.sp_restoke_price(integer, double precision, integer, double precision, integer);

CREATE OR REPLACE PROCEDURE public.sp_restoke_price(
	restokeprice_id integer,
	restokebuyingprice double precision,
	restokebuyingquantity integer,
	restokesellingprice double precision,
	restokeavailablequantity integer)
LANGUAGE 'plpgsql'
AS $BODY$
--DECLARE PriceInsertedId integer;
begin
update "Price"
	set "Buying_Price"=restokebuyingprice+"Buying_Price","Buying_Quantity"=restokebuyingquantity+"Buying_Quantity"
	,"Selling_Price"=restokesellingprice+"Selling_Price"
	,"Available_Quantity"="Available_Quantity"+restokebuyingquantity where "Price_Id"=restokeprice_id;
  commit;
 -- select Max("Price_Id") into PriceInsertedId from "Price";
  --SElect SupplierInsertedId
  --CALL sp_Change_Ingredient(EditingredientId,Editingredientname,EditProvince_Id,SupplierData_Id,EditIngredient_visibility,ItemId);
  end;
$BODY$;

