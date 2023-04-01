#Ejercicio para saber si un numero es primo con función

def primo(num): #Recibe un parametro 
    if num <= 1:
        return False 
    
    for i in range(2,num):
        if num % i == 0:
            return False
    
    return True

num = int(input('Dime tu numero para evaluar si es primo: '))

if primo(num):
    print ("El numero ",num, "es primo")
else:
    print (f'{num} no es primos')