using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Witb
{
    #region Products
    public class Products
    {
        #region Member Variables
        protected int _id;
        protected string _vendor_id;
        protected string _brand_name;
        protected string _category;
        protected string _sub_category;
        protected string _product_name;
        protected string _product_code;
        protected string _description;
        protected string _image_url;
        protected string _quantity;
        protected string _MRP;
        protected string _selling_price;
        protected string _HSN_code;
        protected string _fk_link;
        protected string _sd_link;
        protected string _az_link;
        protected string _x_link;
        protected string _y_link;
        protected unknown _reg_date;
        #endregion
        #region Constructors
        public Products() { }
        public Products(string vendor_id, string brand_name, string category, string sub_category, string product_name, string product_code, string description, string image_url, string quantity, string MRP, string selling_price, string HSN_code, string fk_link, string sd_link, string az_link, string x_link, string y_link, unknown reg_date)
        {
            this._vendor_id=vendor_id;
            this._brand_name=brand_name;
            this._category=category;
            this._sub_category=sub_category;
            this._product_name=product_name;
            this._product_code=product_code;
            this._description=description;
            this._image_url=image_url;
            this._quantity=quantity;
            this._MRP=MRP;
            this._selling_price=selling_price;
            this._HSN_code=HSN_code;
            this._fk_link=fk_link;
            this._sd_link=sd_link;
            this._az_link=az_link;
            this._x_link=x_link;
            this._y_link=y_link;
            this._reg_date=reg_date;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Vendor_id
        {
            get {return _vendor_id;}
            set {_vendor_id=value;}
        }
        public virtual string Brand_name
        {
            get {return _brand_name;}
            set {_brand_name=value;}
        }
        public virtual string Category
        {
            get {return _category;}
            set {_category=value;}
        }
        public virtual string Sub_category
        {
            get {return _sub_category;}
            set {_sub_category=value;}
        }
        public virtual string Product_name
        {
            get {return _product_name;}
            set {_product_name=value;}
        }
        public virtual string Product_code
        {
            get {return _product_code;}
            set {_product_code=value;}
        }
        public virtual string Description
        {
            get {return _description;}
            set {_description=value;}
        }
        public virtual string Image_url
        {
            get {return _image_url;}
            set {_image_url=value;}
        }
        public virtual string Quantity
        {
            get {return _quantity;}
            set {_quantity=value;}
        }
        public virtual string MRP
        {
            get {return _MRP;}
            set {_MRP=value;}
        }
        public virtual string Selling_price
        {
            get {return _selling_price;}
            set {_selling_price=value;}
        }
        public virtual string HSN_code
        {
            get {return _HSN_code;}
            set {_HSN_code=value;}
        }
        public virtual string Fk_link
        {
            get {return _fk_link;}
            set {_fk_link=value;}
        }
        public virtual string Sd_link
        {
            get {return _sd_link;}
            set {_sd_link=value;}
        }
        public virtual string Az_link
        {
            get {return _az_link;}
            set {_az_link=value;}
        }
        public virtual string X_link
        {
            get {return _x_link;}
            set {_x_link=value;}
        }
        public virtual string Y_link
        {
            get {return _y_link;}
            set {_y_link=value;}
        }
        public virtual unknown Reg_date
        {
            get {return _reg_date;}
            set {_reg_date=value;}
        }
        #endregion
    }
    #endregion
}