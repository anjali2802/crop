from flask import Flask
from flask import render_template, url_for, flash, redirect,request
from werkzeug.utils import secure_filename
from crop_advisor.forms import FertilizerPredict,CropPredict
from crop_advisor.predict_methods import fert_recommend,crop_recommendation_model,weather_fetch,predict_image,weather_predict
import numpy as np
import os
from PIL import Image
from predict import predict_crop
app = Flask(__name__)
app.config['SECRET_KEY'] = '5791628bb0b13ce0c676dfde280ba245'
app.config['UPLOADS'] = 'static/images'

ALLOWED_EXTENSIONS = set(['png', 'jpg', 'jpeg', 'gif'])
soil={'sandy and loam soil': 11,
 'loamy soil': 10,
 'sandy soil': 9,
 'clay soil': 8,
 'Alluvial Soil': 7,
 'Black soil': 6,
 'silty soil': 5,
 'black cotton soil': 4,
 'Red sandy loam': 3,
 'Coastal sandy': 2,
 'clay loam soil': 1}
# import os
# from PIL import Imag

def allowed_file(filename):
    return '.' in filename and filename.rsplit('.', 1)[1].lower() in ALLOWED_EXTENSIONS

@app.route("/")
@app.route("/userhome")
def userhome():
    return render_template('userhome.html', title='Home')

@app.route("/userabout")
def userabout():
    return render_template('userabout.html', title='About')

@app.route("/fertilizerpredict",methods=['GET','POST'])
def fertilizerpredict():
    form= FertilizerPredict()
    if request.method=='POST':
        N = int(request.form['nitrogen'])
        P = int(request.form['phosphorous'])
        K = int(request.form['pottasium'])
        crop = request.form.get("crop")
        response=fert_recommend(N,P,K,crop)
        return render_template('fertilizerresult.html', recommendation=response, title='Fertlilizer-Suggestion')
    return render_template('fertilizerpredict.html', title='Fertilizer-Suggestion',form=form)
    

# @app.route("/croppredict",methods=['GET','POST'])
# def croppredict():
#     form= CropPredict()
#     if request.method=='POST':
#         N = int(request.form['nitrogen'])
#         P = int(request.form['phosphorous'])
#         K = int(request.form['pottasium'])
#         ph = float(request.form['ph'])
#         rainfall = float(request.form['rainfall'])
#         soiltype=request.form.get("soiltype")
#         city = request.form.get("city")
#         if weather_fetch(city) != None:
#             temperature, humidity = weather_fetch(city)
#             data = np.array([[N, P, K, temperature, humidity, ph, rainfall,soil[soiltype]]])
#             prediction = crop_recommendation_model(data)
#             return render_template('cropresult.html', recommendation=prediction, title='Crop Recommendation')
#         else:
#             flash("Sorry we couldn't process your request currently.Please check your internet connection and try again",'danger')
#             return redirect(url_for('croppredict'))
#     return render_template('croppredict.html', title='Crop Recommendation',form=form)

@app.route("/croppredict",methods=['GET','POST'])
def croppredict():
    form= CropPredict()
    if request.method=='POST':
        N = int(request.form['nitrogen'])
        P = int(request.form['phosphorous'])
        K = int(request.form['pottasium'])
        ph = float(request.form['ph'])
        rainfall = float(request.form['rainfall'])
        soiltype=request.form.get("soiltype")
        city = request.form.get("city")
        # if weather_fetch(city) != None:
        #     if
        if True:
            # temperature, humidity = weather_fetch(city)
            # data = np.array([[N, P, K, temperature, humidity, ph, rainfall,soil[soiltype]]])
            # prediction = crop_recommendation_model(data)
            # import random
            # mylist = [
            #                 "Apple",
            #                 "Banana",
            #                 "Cherry",
            #                 "Berry",
            #                 'Orange',
            #                 'Mango',
            #                 'Grapes',
            #                 'Watermelon',
            #                 'Rice',
            #                 'Wheat',
            #                 'Maize',
            #                 'Bajra',
            #                 'Jowar',
            #                 'Ragi',
            #                 'Barley',
            #                 'Sorghum',
            #                 'Tur (Pigeon Pea)',
            #                 'Urad',
            #                 'Moong',
            #                 'Chana (Chickpea)',
            #                 'Masoor',
            #                 'Arhar (Pigeon Pea)',
            #                 'Soybean',
            #                 'Groundnut',
            #                 'Sunflower',
            #                 'Safflower',
            #                 'Niger',
            #                 'Castor',
            #                 'Linseed',
            #                 'Cotton',
            #                 'Jute',
            #                 'Sugarcane',
            #                 'Tea',
            #                 'Coffee',
            #                 'Rubber',
            #                 'Spices',
            #                 'Fruits',
            #                 'Vegetables',
            #                 'Oilseeds',
            #                 'Pulses',
            #                 'Tobacco',
            #                 'Cashew',
            #                 'Coconut',
            #                 'Arecanut',
            #                 'Pepper',
            #                 'Ginger',
            #                 'Turmeric',

            #                 ]
            # print("*" * 100)
            # print(random.choice(mylist))
            # print("#" * 100)
            # # print("Prediction:-",prediction)
            # prediction=random.choice(mylist)
            prediction = predict_crop()
            return render_template('cropresult.html', recommendation=prediction, title='Crop Recommendation')
        else:
            flash("Sorry we couldn't process your request currently.Please check your internet connection and try again",'danger')
            return redirect(url_for('croppredict'))
    return render_template('croppredict.html', title='Crop Recommendation',form=form)

@app.route("/diseasepredict",methods=['GET','POST'])
def diseasepredict():
    if request.method == 'POST':
        if 'file' not in request.files:
            flash('Please upload an Image of crop leave..','danger')
            return redirect(url_for('diseasepredict'))
        file = request.files.get('file')
        if not file:
            flash('Please upload an Image of crop leave..','danger')
            return redirect(url_for('diseasepredict'))
        if file and allowed_file(file.filename):
            filename = secure_filename(file.filename)
            img = os.path.join(app.config['UPLOADS'], filename)
            i = Image.open(file)
            i.save(img)
        #try:
            #img = file.read()

            prediction = predict_image(img)

            return render_template('diseaseresult.html', prediction=prediction, title='Disease Prediction')
        #except:
            #flash('Please upload an Image of crop leave..excecution','danger')
            #pass    
    
    return render_template('diseasepredict.html', title='Disease Prediction')


@app.route("/weatherinformation",methods=['GET','POST'])
def weatherinformation():
    if request.method=="POST":
        city=request.form.get("city")
        weather=weather_predict(city)
        if weather != None:
            return render_template('weatherinforesult.html',dic=weather,title="Weather Information")
        else:
            flash("Sorry we couldn't process your request currently.Please check your internet connection..",'info')
            return redirect(url_for('weatherinformation'))     
    return render_template('weatherinfo.html',title="Weather Information")


if __name__ == '__main__':
    app.run()
    
