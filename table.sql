-- Table: public.Customer

-- DROP TABLE public."Customer";

CREATE TABLE public."Customer"
(
    "CustomerId" integer NOT NULL DEFAULT nextval('"Customer_CustomerId_seq"'::regclass),
    "CustomerName" character varying COLLATE pg_catalog."default" NOT NULL,
    "Email" character varying COLLATE pg_catalog."default" NOT NULL,
    "Phone" character varying COLLATE pg_catalog."default",
    CONSTRAINT "Customer_pkey" PRIMARY KEY ("CustomerId")
)

TABLESPACE pg_default;

ALTER TABLE public."Customer"
    OWNER to postgres;
	
	-- Table: public.Ingredient

-- DROP TABLE public."Ingredient";

CREATE TABLE public."Ingredient"
(
    "IngredientId" integer NOT NULL DEFAULT nextval('"Ingredient_IngredientId_seq"'::regclass),
    "Name" character varying COLLATE pg_catalog."default" NOT NULL,
    "RegionalProvinceId" integer NOT NULL,
    "UserId" integer NOT NULL,
    "SupplierId" integer NOT NULL,
    "PriceId" integer,
    "Visibility" integer,
    CONSTRAINT "Ingredient_pkey" PRIMARY KEY ("IngredientId"),
    CONSTRAINT "fk_PriceId" FOREIGN KEY ("PriceId")
        REFERENCES public."Price" ("Price_Id") MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT "fk_RegionalProvinceId" FOREIGN KEY ("RegionalProvinceId")
        REFERENCES public."Regional_Province" ("ProvinceId") MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT "fk_SupplierId" FOREIGN KEY ("SupplierId")
        REFERENCES public."Supplier" ("SupplierId") MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT "fk_UserId" FOREIGN KEY ("UserId")
        REFERENCES public."Pizza_Baker" ("UserId") MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)

TABLESPACE pg_default;

ALTER TABLE public."Ingredient"
    OWNER to postgres;
	
	-- Table: public.Order

-- DROP TABLE public."Order";

CREATE TABLE public."Order"
(
    "OrderId" integer NOT NULL DEFAULT nextval('"Order_OrderId_seq"'::regclass),
    "CustomerId" integer NOT NULL,
    "OrderStatusId" integer NOT NULL,
    "UserId" integer NOT NULL,
    "VariantId" integer NOT NULL,
    "PizzaSize" double precision NOT NULL,
    CONSTRAINT "Order_pkey" PRIMARY KEY ("OrderId"),
    CONSTRAINT "fk_StatusId" FOREIGN KEY ("OrderStatusId")
        REFERENCES public."Order_Status" ("StatusId") MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT "fk_UserId" FOREIGN KEY ("UserId")
        REFERENCES public."Pizza_Baker" ("UserId") MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)

TABLESPACE pg_default;

ALTER TABLE public."Order"
    OWNER to postgres;
	
	-- Table: public.Order_Status

-- DROP TABLE public."Order_Status";

CREATE TABLE public."Order_Status"
(
    "StatusId" integer NOT NULL DEFAULT nextval('"Order_Status_StatusId_seq"'::regclass),
    "StatusName" character varying COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT "OrderStatus_pkey" PRIMARY KEY ("StatusId")
)

TABLESPACE pg_default;

ALTER TABLE public."Order_Status"
    OWNER to postgres;
	
	-- Table: public.Pizza_Baker

-- DROP TABLE public."Pizza_Baker";

CREATE TABLE public."Pizza_Baker"
(
    "FirstName" character varying(50) COLLATE pg_catalog."default" NOT NULL,
    "UserId" integer NOT NULL DEFAULT nextval('"Pizza_Baker_UserId_seq"'::regclass),
    "LastName" character varying(50) COLLATE pg_catalog."default",
    CONSTRAINT "Pizza_Baker_pkey" PRIMARY KEY ("UserId")
)

TABLESPACE pg_default;

ALTER TABLE public."Pizza_Baker"
    OWNER to postgres;
	
	-- Table: public.Pizza_Variant

-- DROP TABLE public."Pizza_Variant";

CREATE TABLE public."Pizza_Variant"
(
    "VariantId" integer NOT NULL DEFAULT nextval('"Pizza_Variant_VariantId_seq"'::regclass),
    "Count" integer NOT NULL,
    "PizzaName" character varying COLLATE pg_catalog."default",
    "IngredientIdWithConcat" integer[],
    CONSTRAINT "Pizza_Variant_pkey" PRIMARY KEY ("VariantId")
)

TABLESPACE pg_default;

ALTER TABLE public."Pizza_Variant"
    OWNER to postgres;
	
	-- Table: public.Price

-- DROP TABLE public."Price";

CREATE TABLE public."Price"
(
    "Price_Id" integer NOT NULL DEFAULT nextval('"Price_Price_Id_seq"'::regclass),
    "Buying_Price" double precision NOT NULL,
    "Buying_Quantity" integer NOT NULL,
    "Selling_Price" double precision NOT NULL,
    "Available_Quantity" integer NOT NULL,
    CONSTRAINT "Price_pkey" PRIMARY KEY ("Price_Id")
)

TABLESPACE pg_default;

ALTER TABLE public."Price"
    OWNER to postgres;
	
	-- Table: public.Regional_Province

-- DROP TABLE public."Regional_Province";

CREATE TABLE public."Regional_Province"
(
    "ProvinceId" integer NOT NULL DEFAULT nextval('"Regional_Province_ProvinceId_seq"'::regclass),
    "ProvinceName" character varying COLLATE pg_catalog."default",
    CONSTRAINT "Regional_Province_pkey" PRIMARY KEY ("ProvinceId")
)

TABLESPACE pg_default;

ALTER TABLE public."Regional_Province"
    OWNER to postgres;
	
	-- Table: public.Supplier

-- DROP TABLE public."Supplier";

CREATE TABLE public."Supplier"
(
    "SupplierId" integer NOT NULL DEFAULT nextval('"Supplier_SupplierId_seq"'::regclass),
    "Name" character varying COLLATE pg_catalog."default" NOT NULL,
    "Address" character varying COLLATE pg_catalog."default" NOT NULL,
    "Visibility" integer,
    CONSTRAINT "Supplier_pkey" PRIMARY KEY ("SupplierId")
)

TABLESPACE pg_default;

ALTER TABLE public."Supplier"
    OWNER to postgres;
	
	-- Table: public.Supplier_Item

-- DROP TABLE public."Supplier_Item";

CREATE TABLE public."Supplier_Item"
(
    "ItemId" integer NOT NULL DEFAULT nextval('"Supplier_Item_ItemId_seq"'::regclass),
    "IngredientId" integer NOT NULL,
    "SupplierId" integer NOT NULL,
    CONSTRAINT "Supplier_Item_pkey" PRIMARY KEY ("ItemId"),
    CONSTRAINT "fk_IngredientId" FOREIGN KEY ("IngredientId")
        REFERENCES public."Ingredient" ("IngredientId") MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT "fk_SupplierId" FOREIGN KEY ("SupplierId")
        REFERENCES public."Supplier" ("SupplierId") MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)

TABLESPACE pg_default;

ALTER TABLE public."Supplier_Item"
    OWNER to postgres;