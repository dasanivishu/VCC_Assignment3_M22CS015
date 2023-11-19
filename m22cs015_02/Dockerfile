FROM mysql:latest

# Set the MySQL root password (change 'your_password' to your desired password)
ENV MYSQL_ROOT_PASSWORD root

# Copy the initialization script
COPY init.sql /docker-entrypoint-initdb.d/

# Expose the MySQL port
EXPOSE 3306
