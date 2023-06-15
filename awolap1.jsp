<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>

<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" jdbcUrl="jdbc:mysql://localhost/awolap?user=root&password=" catalogUri="/WEB-INF/queries/awolap1.xml">
   
      SELECT
      {[Measures].[SubTotal]} ON COLUMNS,
      {([Address], [Customer], [product].[All Product])} ON ROWS
    FROM [INC]
   
</jp:mondrianQuery>


<c:set var="title01" scope="session">Query AdventureWorks using Mondrian OLAP</c:set>
