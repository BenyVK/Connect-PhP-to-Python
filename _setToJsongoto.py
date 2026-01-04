import json

data = {
    "name": "Benyamin",
    "family": "Gharri",

    "age": 26,
    "email": "benyamin@gharri.ir",
    "developer": "...."
}

with open('gotoLanguage.json', 'w') as f:
    json.dump(data, f, indent=2)

print("Save data to file system.")
