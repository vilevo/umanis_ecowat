from flask import Flask, jsonify, request

import pandas as pd
import statsmodels.api as sm
from sklearn.preprocessing import StandardScaler
import numpy as np
​
from mpl_toolkits.mplot3d import Axes3D
import matplotlib.pyplot as plt

app = Flask(__name__)

@app.route('/', methods=['GET', 'POST'])
def index():
	if (request.method == 'POST'):
		some_json = request.get_json()
	    #return jsonify({"you sent": some_json}, 201)
	else:
		return jsonify({"about": "index"})

@app.route('/prediction/<int:annee>', methods=['GET'])
def prediction_consomation(annee):
    #prediction population urbaine
    df = pd.read_excel(r"http://www.enginnova.net/ecowat/data/consomationUrbaine.xlsx")
    
    #recuperation de la population
	y_pred_urbain = df["pop_u"]
	#recuperation de l'annee et la consommation annuelle
	X_urbain = df['annee']
	#prediction de la population urbaine
	
	#recherche des coefficients avec la methode de regression lineaire a une variable
	model = sm.OLS(y_pred_urbain, X_urbain)
	result = model.fit()
	coef_u = result.params.annee
	
	#prediction de la population rurale
    df1 = pd.read_excel(r"http://www.enginnova.net/ecowat/data/consomationRurale.xlsx")
    
	#recuperation de la population
	y_pred_rurale = df1["pop_r"]
	#recuperation de l'annee et la consommation annuelle
	X_rurale = df['annee']
	
	model_r = sm.OLS(y_pred_rurale, X_rurale)
	result_r = model_r.fit()
	coef_r = result.params.annee
	
	#656.0433 , 1412.0248 coef calculé 
	#avec la methode de regression lineaire
	#dans anaconda
	conso_moyenne_pop_urbaine = 80 #m3
	conso_moyenne_pop_rurale = 60 #m3

	pop_u = coef_u*annee
	pop_r = coef_r*annee

	consomation_urbaine = pop_u*conso_moyenne_pop_urbaine*365
	consomation_rurale = pop_r*conso_moyenne_pop_rurale*365
	

	return jsonify({'pop_u': pop_u,
					'pop_r': pop_r,
					'consomation_urbaine': consomation_urbaine,
					'consomation_rurale': consomation_rurale,

		})

if __name__ == '__main__':
	app.run(host="127.0.0.1", port="8080", debug=True)

	app.run(debug=True)

