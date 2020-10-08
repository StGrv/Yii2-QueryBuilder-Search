# Yii2-QueryBuilder-Search
Built on top of Database Access Objects, query builder allows you to construct a SQL query in a programmatic and DBMS-agnostic way. 

1. In the Search model we apply some basic rules & security and then we construct the query using Query Builder.
2. If the search is empty we display a message.
3. If such records dont exist we display another message.
4. If the search is not empty and it exists we fetch the rows using @foreach cycle.
