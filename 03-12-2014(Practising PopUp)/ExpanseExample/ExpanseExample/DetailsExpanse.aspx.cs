using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace ExpanseExample
{
    public partial class DetailsExpanse : System.Web.UI.Page
    {
        private Expanse DetailExpanse
        {
            get
            {
                return Session["DetailExpanse"] as Expanse;
            }
            set
            {
                Session["DetailExpanse"] = value;
            }
        }
        public UIMODE UIMode
        {
            get
            {
                if (ViewState["UIMODE"] == null)
                    ViewState["UIMODE"] = new UIMODE();
                return (UIMODE)ViewState["UIMODE"];
            }
            set
            {
                ViewState["UIMODE"] = value;
            }
        }

        private int EID
        {
            get
            {
                if (ViewState["EID"] == null)
                    ViewState["EID"] = -1;
                return (int)ViewState["EID"];
            }
            set
            {
                ViewState["EID"] = value;
            }
        }
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                string qsUIMODE = Request.QueryString["UIMODE"];
                if (string.IsNullOrEmpty(qsUIMODE) == false)
                {
                    UIMode = (UIMODE)Enum.Parse(typeof(UIMODE), qsUIMODE);
                    EID = Convert.ToInt32(Request.QueryString["EID"]);
                    LoadExpanse();
                    hdnWindowUIMODE.Value = UIMode.ToString();
                }
                MultiViewExpanse.ActiveViewIndex = 0;
            }
        }

        private void LoadExpanse()
        {
            ExpanseClassesDataContext db = new ExpanseClassesDataContext();
            Expanse exp = db.Expanses.Single(p => p.ID == EID);
            DetailExpanse = exp;

            TextBoxCategory.Text = exp.Category;
            TextBoxDate.Text = exp.Date.ToShortDateString();
            TextBoxAmount.Text = exp.Amount.ToString();
        }

        protected void lnkAddAnother_Click(object sender, EventArgs e)
        {
        }

        protected void btnOkay_Click(object sender, EventArgs e)
        {
            try
            {

                if (!IsPostBack)
                {
                    if (UIMode == UIMODE.VIEW)
                    {
                        LoadExpanse();
                    }
                }
                MultiViewExpanse.ActiveViewIndex = 1;
                ClientScript.RegisterStartupScript(this.GetType(), "onload", "onSuccess();", true);
            }
            catch
            {
                ClientScript.RegisterStartupScript(this.GetType(), "onload", "onError();", true);
                MultiViewExpanse.ActiveViewIndex = 1;
            }
        }
    }
}