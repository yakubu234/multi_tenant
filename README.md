This is a multi tenant system utilizing the library stancl/tenancy

### Multi Tenant Laravel application

steps to install 

```bash
install docker
```



To run the project copy and paste each line to the terminal 

```bash
docker-compose build
```

```bash
docker-compose up -d
```

you should have a green check of container name started or running.

## go to **{baseUrl}/super-admin** to login to super admin portal
###  Use the credentials: super_admin@gmail.com as email and password: password

The baseUrl or address is either 

```bash
http://localhost:8000/
```

or 

```bash
http://trial.test
```

### Upon registering for a company (tenant) from the base url, a DB is created for the tenant (tenant . $name e,g if name = john then DB is tenantjohn), a url is also generated for the tenant immediately it will be john.baseurl
