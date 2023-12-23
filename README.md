# mineid
MineID.hu - Your Minecraft passport.

# API
## POST /api/verify/user
### Body:

- **x-www-form-urlencoded**
- **token:** *session token, which you get back from a login form*

### Possible API responses:
- 01 - Missing token from the request body.
- 02 - Invalid token.
- 03 - Token expired.
- 04 - Token valid, but user not found.
- 05 - Token already used.
- 06 - Ok.

### Possible API responses:
Responses are sent in **JSON** format.

```{"message":"Ok.","code":"06","status":"success","user":{"id":1,"username":"akameleon","name":"akameleon","ip":"xx.xx.xx.xx","lastlogin":0,"x":0,"y":0,"z":0,"world":"world","regdate":1703253885,"regip":"xx.xx.xx.xx","yaw":null,"pitch":null,"email":"support@mineid.hu","verified_email":1,"isLogged":0,"hasSession":0,"uuid":"d6b5267c-6af3-3aca-bb29-7c3abe2dde1b"}}```

```{"message":"Token already used.","code":"05","status":"error"}```
