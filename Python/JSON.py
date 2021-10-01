import json,pprint
configStr = '{ "name": "My Server", "host": "localhsot", "protocol": "sftp", "port": 22, "username": "username", "remotePath": "/", "uploadOnServer": true }'

### hw : how to validate json string in python
def isJsonValidate(configStr):
    try:
        ######## JSON string and changed to json object for using in project 
        dataObj = json.loads(configStr)
        pprint.pprint(dataObj)
        ######## JSON object and changed to json string for using in project 
        dataObj['name'] = "Your Server";
        configObj = json.dumps(dataObj)
        pprint.pprint(configObj)
    except ValueError as e :
        pprint.pprint("Json Is Wrong")
        return False
    return True

isJsonValidate(configStr)