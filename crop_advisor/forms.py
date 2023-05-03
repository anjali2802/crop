from flask_wtf import FlaskForm
from wtforms import SubmitField, SelectField,FloatField
from wtforms.validators import DataRequired

class FertilizerPredict(FlaskForm):
    nitrogen=FloatField(validators=[DataRequired()])
    phosphorous=FloatField(validators=[DataRequired()])
    pottasium =FloatField(validators=[DataRequired()])
    crop=SelectField(validators=[DataRequired()])
    submit = SubmitField('Predict')
    
class CropPredict(FlaskForm):
    nitrogen=FloatField(validators=[DataRequired()])
    phosphorous=FloatField(validators=[DataRequired()])
    pottasium =FloatField(validators=[DataRequired()])
    ph =FloatField(validators=[DataRequired()])
    rainfall =FloatField(validators=[DataRequired()])
    soiltype=SelectField(validators=[DataRequired()])
    state=SelectField(validators=[DataRequired()])
    city=SelectField(validators=[DataRequired()])
    submit = SubmitField('Predict')
    