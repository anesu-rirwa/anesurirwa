import flask
import flask_ngrok
from flask import Flask, render_template, request
from flask_ngrok import run_with_ngrok
import pickle

# Running flask app
app = Flask(__name__)
run_with_ngrok(app)

#load model
#regr = pickle.load(open('/Fifa_Assignment.pkl', 'rb'))

@app.route('/')
def home():
  #return "Hello World"
  return render_template('/index.php')
 

if __name__ == '__main__':
  app.run()