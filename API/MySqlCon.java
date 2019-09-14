import java.sql.*;

class MySqlCon
{
	public static void main(String args[])
	{
		try
		{
			Class.forName("com.mysql.jdbc.Driver");

			Connection con = DriverManager.getConnection(
			                   "jdbc:mysql://localhost:3306/contact_manager",
                               "username",
                               "password");

			System.out.println("We have connected");
		}
		catch(Exception e)
		{
			System.out.println(e);
		}
	}
}
