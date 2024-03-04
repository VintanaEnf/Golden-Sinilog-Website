from django.shortcuts import render
from django.http import HttpResponse	
from django.urls import path
# Create your views here.

def home(request):
	return HttpResponse('<h1>Blog Home </h1>')