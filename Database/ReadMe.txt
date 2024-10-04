        
       1. CREATING A DATABASE

                           create database users;

`````````````````````````````````````````````````````````````````````````````````````````
   
           //=> DROPPING A DATABASE
                          drop database users;

**************************************************************************************************************************************************************************************************
       2. CREATING A TABLE

             create table users(
                  User_Name varchar(50),
                 Pass_Key     varchar(100)
                Reg_Date    date
               );


             //=> DROPPING A TABLE

                         DROP TABLE  users;


`````````````````````````````````````````````````````````````````````````````````````````

                // =>    INSERTTING A NEW COLUMN

                                        Example;

                                             ALTER TABLE employees
                                                       ADD COLUMN job VARCHAR(50) AFTER hourly_pay;

**************************************************************************************************************************************************************************************************
        3. INSERTING A ROW

             i)  All elements

                        insert into users
                        values("4", "Denisdd", "Deno122", "2024-06-02");

              ii)Specific elements

                          insert into users (User_Name, Pass_Key)
                          values("Denisdd", "Deno122");


````````````````````````````````````````````````````````````````````````

            // =>  UPDATING ROW
                       
                             Example ;
  
                                     UPDATE  employees
                                     SET job = "Driver"
                                     WHERE employee_id = "1";

**************************************************************************************************************************************************************************************************                  
        4. SELECTING A ROW

             i)  Specific row

                   select * from users
                   where user_name = "Hope254";
        
             ii)  Whole row

                   select * from users;

**************************************************************************************************************************************************************************************************
          5. DELETING A ROW
                   
                   i) All rows
                          
                                delete from users;
                         
                    ii)Specific Rows
                                
                                 delete from users
                                 where  user_name = "Hope254";

**************************************************************************************************************************************************************************************************
             6. AUTO COMMIT
                       
                          i)Enable

                              set autocommit = on;

                         ii)Disable

                              set autocommit = off;

                NB:// Auto commit is set to ON by default.

**************************************************************************************************************************************************************************************************
             7. COMMIT
                            
                               commit;
 
                 //commit creates a save point.
**************************************************************************************************************************************************************************************************   
             8. ROLLBACK
                            
                              rollback;
 
                 //it is used to undo the changes.
                 // It restores the changes back to the previous save point,  where commit was used.

**************************************************************************************************************************************************************************************************
           9. CURRENT DATE AND TIME

                          For instance:
 
                                       i) Create a new table
                                                   
                                                        create table test (
                                                                       my_date   date,
                                                                        my_time  time,
                                                                        my_datetime   datetime
                                                                    );

                                          ii) Insert a row
                                  
                                                            insert into test
                                                                values( current_date(), current_time(), now());

                     a) Current_date()
                      b) Current_time()
                      c) now()

                      NB// We Add or Subtract to get the previous Time or Date.

**************************************************************************************************************************************************************************************************                
                 
        10. CONSTRAINTS
 
                           a) UNIQUE
                                         
                                        For instance:
 
                                                   i) Create a new table

                                                                   create table product (                     
                                                                                  product_id  int,
                                                                                  product_name varchar(20), unique,
                                                                                  product_price decimal (4, 2)
                                                                              );

                                                      ii) Updating UNIQUE constraint

                                                                      alter table product
                                                                                add constraint
                                                                              unique(product_id);


                            ````````````````````````````````````````````````````````````````````````````````````````
                              b)NOT NULL

                                            Example;
                                       
                                                i) Create a Table

                                                            create table product (                     
                                                                            product_id  INT,
                                                                            product_name VARCHAR(20), UNIQUE,
                                                                            product_price DECIMAL(4, 2) NOT NULL
                                                                          );
                                         
                                              ii) Updating NOT NULL constraint
                                                                     
                                                                   ALTER TABLE product
                                                                        MODIFY  product_id  INT  NOT NULL;

                               ````````````````````````````````````````````````````````````````````````````````````````         
                              c) CHECK
                                             
                                         Example.
                                            
                                               i) Create a Table

                                                  CREATE  TABLE employees (
                                                                               employee_id   INT,
                                                                               first_name  VARCHAR(50),
                                                                               last_name  VARCHAR(50),
                                                                               hourly_pay DECIMAL (5, 2),
                                                                               hire_date DATE ,
                                                                              CONSTRAINT  check_pay   CHECK (hourly_pay  >= 10.00)
                                                                             );

                                            ii) Updating CHECK constraint

                                                                        ALTER TABLE employees
                                                                                   ADD CONSTRAINT check_pay CHECK (hourly_pay >= 10.00);

                                                 ii) Dropping CHECK constraint
                                                                            
                                                                        ALTER TABLE employees
                                                                                 DROP CONSTRAINT  check_pay;

                                   NB: => It is used to limit what values can be placed in a column.
                                            => It is advisable to give your Check contraint a name for easy updating or droping.

                                ````````````````````````````````````````````````````````````````````````````````````````````````````````````` 
                                 d) DEFAULT

                                                 Example.

                                                              i) Create a Table
                                                                
                                                                                    CREATE TABLE products (
                                                                                                      product_id INT,
                                                                                                      product_name VARCHAR(25),
                                                                                                      price DECIMAL(4,2) DEFAULT 0.00
                                                                                               );
                                        
                                                                ii) Altering   DEFAULT constraint
                                                                                           
                                                                                ALTER TABLE products
                                                                                     ALTER price SET DEFAULT 0;
                                                            
                                                                                 
                                                                iii) inserting a new row with having set Default values for  the prices to 0

                                                                                   INSERT INTO products(product_id, product_name)
                                                                                                 VALUES(104, "Straw"),
                                                                                                                   (105, "Spoon");

                                                                                       NB://This will have the fault value for price as zero

                                                    Further Example;
                                                                 
                                                             CREATE TABLE transactions(
                                                                   transaction_id INT,
                                                                    amount    DECIMAL(5,2),
                                                                    transaction_date DATETIME  DEFAULT   NOW()                                                                                                             
                                                                          );
                                                                
                                                                NB:://This will update date and time automaticly;
                                   
                                  `````````````````````````````````````````````````````````````````````````````````````````````````````````````  
                                     e) PRIMARY KEY
                                                   
                                                        Example;
   
                                                                     i) Create a table

                                                                                      CREATE TABLE transactions(
                                                                                                   transaction_id   INT   PRIMARY KEY,    
                                                                                                      amount DECIMAL(5,2)
                                                                                                      );
  
                                                                                                                 
                                                                       ii)Updating PRIMARY KEY constraint
                                                                                            
                                                                                              ALTER TABLE transactions
                                                                                                    ADD CONSTRAINT
                                                                                                          PRIMARY KEY( transaction_id);

                                                           NB::// With Primary Key contraint the value is UNIQUE and  not  NULL.
                                                                  // Primary key is limited to one column, there can only be one primary key in a table.

  
  // 1: 09: 09

   NOTE:// Updating here means  =>  updating the constraints for the product that already exist in the column.

***************************************************************************************************************************************************************************************************  
         11. AUTO_INCREMENT


                                      Example;
                                              
                                                i). Create a table

                                                          CREATE TABLE products (
                                                             product_id INT  PRIMARY KEY AUTO_INCREMENT,
                                                             product_name VARCHAR (50) UNIQUE,
                                                             price DECIMAL(10,2)
                                                               );
                                                      
                                                  ii) Create column

                                                             INSERT INTO products(product_name,  price)
                                                                     VALUES( "Basic web",  "50.00");
                                                 
                                            iii) Updating Increment Value
                                                          
                                                             ALTER TABLE products
                                                                     AUTO_INCREMENT = 100;

                                             NB:// Auto increment will start from 100



                     NB:// Auto increment only apply to column set  with Primary Key Constraint.
                                                       
***************************************************************************************************************************************************************************************************  
      12.  FOREIGN KEY
                                  
                              Example;
                          
                                                 i) Create a table
                                                     
                                                              CREATE TABLE  transactions(
                                                                            transaction_id INT PRIMARY KEY AUTO_INCREMENT,
                                                                            amount DECIMAL(5,2),
                                                                            customer_id INT,
                                                                            FOREIGN KEY (customer_id) REFERENCE customers (customer_id)
                                                                    );

                                                  ii) Dropping an Foreign Key

                                                                          ALTER TABLE transactions 
                                                                                 DROP FOREIGN KEY transactions_ibfk_1;
                                              
                                                  iii) Renaming Foreign Key(unique name apart from default).
                                                                            
                                                                           ALTER TABLE transactions
                                                                                    ADD CONSTRAINTS fk_customer_id
                                                                                 FOREIGN KEY(customer_id) REFERENCES customers (customer_id);

                                                  iv) Updating Foreign Key

                                                                            ALTER TABLE transactions
                                                                                    ADD CONSTRAINTS fk_customer_id
                                                                                   FOREIGN KEY(customer_id) REFERENCES customers (customer_id);


                          NB:// We can access customers table using the Foreign Key Constraint.   
                             //We can access/link two different tables using foreign key constraints.
                            // It is a primary key from a different table (as the name suggest Foreign);

***************************************************************************************************************************************************************************************************  

              13. JOINS
                                          
                                NB:// It is used to combine two or more tables based on related column between them such as foreign key.

                                                  a) INNER JOIN

                                                              Example;
                                                                     
                                                                         i) Combining two tables using inner join.
                                   
                                                                                    SELECT * FROM
                                                                                                transactions INNER JOIN  customers
                                                                                                 ON transactions.customer_id = customers.customer_id;


                                                                                      NB:// This will select all rows from both tables that have matching customer ids
                                                                                               //Rows that doesnt have customer id will not be selected.


                                                     b)LEFT JOIN
                                                                 
                                                                           i) Combining two tables using Left  join.
                                   
                                                                                    SELECT * FROM
                                                                                                transactions  LEFT JOIN  customers
                                                                                                 ON transactions.customer_id = customers.customer_id;

                                                                                NB://This will pull in all the data from the left table even those without customer id.
                                                                                       

                                                            b)RIGHT JOIN
                                                                 
                                                                           i) Combining two tables using Right  join.
                                   
                                                                                    SELECT * FROM
                                                                                                transactions  RIGHT JOIN  customers
                                                                                                 ON transactions.customer_id = customers.customer_id;

                                                                                NB://This will pull in all the data from the Right table even those without customer id.


***************************************************************************************************************************************************************************************************  
      14. FUNCTIONS


                              a) COUNT()
                                  
                                             Example 1
                                                                  
                                                     SELECT * COUNT(username)
                                                               FROM users;

                                          NB:// This will return all the rows within username column.  its a good way of finding how many users are registered.

                                      Example 2
                                              with an Alias
                                                     
                                                                SELECT * COUNT(username) as no_of_users
                                                                FROM users;
                                   
                                                  NB:// The column name will be no_of_users.

                                          
                          b) MAX()
                                                
                                          SELECT  MAX(amount)
                                                 FROM customers;
                       
                                    NB:// This will return the maximum amount.

                     b) MIN()
                                                
                                          SELECT   MIN(amount)
                                                 FROM customers;
                       
                                    NB:// This will return the minimum amount.


                    c) AVG()
                                    
                                          SELECT   AVG(amount)
                                                 FROM customers;
                       
                                    NB:// This will return the Average amount.

                      
                    c) SUM()
                                    
                                          SELECT  SUM(amount)
                                                 FROM customers;
                       
                                    NB:// This will return the Sum of the amount.


                       
                    c) CONCAT()
                                    
                                          SELECT  CONCAT(first_name, " " , last_name) as Full name
                                                 FROM customers;
                       
                                    NB:// This will  Concatenate first name and last name.


***************************************************************************************************************************************************************************************************  

  15. LOGICAL OPERATORS


                                 a) AND
                                                 
                                             Example;

                                                       SELECT * FROM  employees
                                                             WHERE hire_date < "2023 - 01 - 5"   AND  job = "cook";

                                             NB:// This will return all the employees whose job titles are cook   and hire date is less than  2023 - 01 - 5.

                        `````````````````````````````````````````````````````````````````````````````````````````````````````

                                  b) OR

                                              Example;

                                                       SELECT * FROM  employees
                                                             WHERE job = "manager"   OR  job = "cook";


                           `````````````````````````````````````````````````````````````````````````````````````````````                              

                                   c) NOT
      
                                                  Example 1;

                                                       SELECT * FROM  employees
                                                             WHERE  NOT job ="manager";

                                                     NB:// Returns all the employees exept the manager.

                                                       Example 2;

                                                       SELECT * FROM  employees
                                                            WHERE  NOT job = "manager"  AND  NOT  job = "ass. manager";

                                                         NB:// Returns all the employees exept the manager and assistant manager.

                      ```````````````````````````````````````````````````````````````````````````````````````

                                 d) BETWEEN
                        
                                               SELECT * FROM  employees
                                                            WHERE  hire_date  BETWEEN  "2023 - 05 - 01" AND "2023 - 05 - 05";



                                     NB:// It is used while working with data in single column.
                        
                    ```````````````````````````````````````````````````````````````````````````````````````````                                   
                                                     
                              e) IN
                              
                                          SELECT * FROM employees
                                                WHERE IN job("cook", "driver");
                                        
                                       NB::// Filters data using a specific column

***************************************************************************************************************************************************************************************************  
                
 16. WILD CARD OPERATORS

                     => There are two wild card operators %  and  _
                     =>  Used to substitute one or more characters in a string.


                 a)  %

                                      Example 1;
                 
 
                                                      SELECT * FROM  users
                                                            WHERE first_name  LIKE  '%S';

                                                   NB:// For this case it will return any  First Name  that  ends with the letter S;

                             
                                       Example 2;
                                   

                                                    SELECT * FROM  users
                                                           WHERE first_name  LIKE  'S%';


                                                    NB:// For this case it will return any  First Name  that  starts with the letter S;
                         


                             b) _  (underscore)


                                       Example 1;

                                                  SELECT * FROM  users
                                                           WHERE first_name  LIKE  '_ett';

                                        Example 2;

	                              SELECT *
                                                     FROM customers
                                                          WHERE last_name LIKE '_ _ _ _ _ _ch';


                                       Example 3;

                                                 SELECT * FROM   employees
                                                     WHERE    employee_name  LIKE  "_a%";              //Returns employees names where second lettters  =  a

                                          NB://  _ (underscore) Represents one random character.


***************************************************************************************************************************************************************************************************  

14. ORDER BY


                    Example 1;
  
                            SELECT * FROM employees
                                  ORDER BY  last name   ASC;

                         NB:// This will order employees by last name  alphabetically and in ascending order.  (ASC) ascending.

                 ```````````````````````````````````````````````````````````````````````````````           
                     Example 2;
  
                            SELECT * FROM employees
                                  ORDER BY  employee_id   DESC;

                         NB:// This will order employees by last name  alphabetically and in ascending order.  (ASC) ascending.

               ``````````````````````````````````````````````````````````````````````````````````
                    Example 3;

                           SELECT * FROM transactions
                                ORDER BY  amount ASC, customer_id DESC;

                          NB:// This helps where there is a column with the same figures.
                                // ORDER BY default is ASC ascending;
               

***************************************************************************************************************************************************************************************************  
15. LIMIT
                            
                      Example 1;

                              SELECT * FROM customers
                                 LIMIT 3;                                                         //Returns the first Three




                     Example 2;

                              SELECT * FROM customers
                               ORDER BY  last_name ASC    LIMIT 3;                                            //Returns the first Three customers ordered by last name Aphabetically in ascending order



                  Example 3;

                              SELECT * FROM customers
                               ORDER BY  last_name  DESC   LIMIT 3;                                            //Returns the first Three customers ordered by last name Aphabetically in descending order



                  Example 4;

                              SELECT * FROM customers
                               ORDER BY  last_name  DESC   LIMIT 3, 3;                                            //Returns the first Three customers ordered by last name Aphabetically in descending order
                                                                                                                                                          //The first 3 represent the offset and the second is the limit.



                               NB:// It is used to limit the number of records to be queried.
                                    // Useful if you are working with alot data.
                                  // Can be used to display large data on pages (Pagination).


***************************************************************************************************************************************************************************************************  
16. UNION

                 
                 Example 1;

                   SELECT first_name , last_name from  users
                     UNION                                                                                                 //This will not return the duplicates
                    SELECT first_name , last_name from  employees;



                Example 2;

                     SELECT first_name , last_name from  users
                      UNION     ALL                                                                                   //This will  return all including the duplicates  the duplicates
                    SELECT first_name , last_name from  employees;
                   


                      NB:// Combines the results of two or more selected statements.
                           // Union doesn't work where tables have different amount of columns.
                          // its is  always advisable to select what columns you want to combine.


***************************************************************************************************************************************************************************************************  
 
 17. SELF JOIN

                    Example 1;


                    NB:// Joins another copy of table to itself
                          // Used to compare rows of the same table.
                          //Helps to display an hierarchy of data.

















































