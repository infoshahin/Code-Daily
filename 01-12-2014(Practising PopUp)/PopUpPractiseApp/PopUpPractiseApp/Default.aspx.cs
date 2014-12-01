using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace PopUpPractiseApp
{
    public partial class _Default : Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void GridView1_RowDataBound(object sender, GridViewRowEventArgs e)
        {
            if (e.Row.RowType == DataControlRowType.DataRow)
            {
                Expanse expanse = e.Row.DataItem as Expanse;
                (e.Row.FindControl("lnkEdit") as LinkButton).Attributes.Add("onClick", "ShowEditModal('" + expanse.ID + "');");
                (e.Row.FindControl("lnkDelete") as LinkButton).CommandArgument = expanse.ID.ToString();
                (e.Row.FindControl("lnkDetails") as LinkButton).Attributes.Add("onClick", "ShowDetailsModal('" + expanse.ID + "');");
            }
        }

        protected void GridView1_RowCommand(object sender, GridViewCommandEventArgs e)
        {
            if (e.CommandName == "MyDelete")
            {
                ExpanseClassesDataContext context = new ExpanseClassesDataContext();
                int EID = Convert.ToInt32(e.CommandArgument);
                context.Expanses.DeleteOnSubmit(context.Expanses.Single(p => p.ID == EID));
                context.SubmitChanges();
                GridView1.DataBind();
                GridView1.DataBind();
            }
        }

        protected void btnSearch_Click(object sender, EventArgs e)
        {
            GridView1.DataBind();
        }

        protected void GridView1_PageIndexChanging(object sender, GridViewPageEventArgs e)
        {
            GridView1.PageIndex = e.NewPageIndex;
            GridView1.DataBind();
        }
    }
}