#----1----
var1 = float(input("Quanto Vale a Hora de Seu Trabalho:"))
var2 = float(input("Quantas Horas Você trabalha Por Mês:"))
print(f"Você Ganha {var1*var2} reais por mês.")

#----2----
var1 = int(input("Insira um Número Inteiro:"))
var2 = int(input("Insira Outro Número Inteiro:"))
var3 = float(input("Insira Um Número Real:"))
print(f"O produto do dobro do primeiro com metade do segundo: {var1*var2}")
print(f"A soma do triplo do primeiro com o terceiro: {3*var1+var3}")
print(f"O terceiro elevado ao cubo: {var3**3}")

#----3----
psototl= float(input("Insira o Peso da Pesca:"))
if psototl > 50:
    excesso = psototl - 50
    multa = excesso*4
    print(f"O Peso Máximo foi Ultrapassado por {excesso} Kilos! Você Vai Tomar Uma Multa de {multa} Reais!")
else:
    print("O Peso Tá Tranquilo")

#----4----
var1 = float(input("Quanto Vale a Hora de Seu Trabalho:"))
var2 = float(input("Quantas Horas Você trabalha Por Mês:"))
print(f"+ Salário Bruto : {var1*var2} R$")
IR = (var1*var2)*0.11
print(f"- IR (11%) : {IR} R$")
INSS = (var1*var2)*0.08
print(f"- INSS (8%) : {INSS} R$")
Sindicato = (var1*var2)*0.05
print(f"- Sindicato ( 5%) : {Sindicato} R$")
SALL = (var1*var2) * 0.76
print(f"= Salário Liquido : {SALL} R$")

#----5----
from math import ceil
metrosE2 = float(input("Quantos Metros Quadrados Devem ser Pintados:"))
litros = metrosE2/3
latas= ceil(litros/18)
print(f"Serão Necessárias {latas} Latas Custando {latas*80} R$")

#----6----
megas = float(input("Quantidade de Megas do Arquivo:"))
velocidade = float(input("Velocidade Média do Dowload em Mbps: "))
tempo = megas/(velocidade*60)
print(f"Serão Necessários {tempo} Minutos de Dowload")

#----7----
Valor1 = float(input("Valor1: "))
Valor2 = float(input("Valor2: "))
if Valor1 > Valor2:
    print(f"O Valor {Valor1} é Maior que o Valor {Valor2}")
elif Valor1 < Valor2:
    print(f"O Valor {Valor2} é Maior que o Valor {Valor1}")
else:
    print(f"Os Valores {Valor1} e {Valor2} são Iguais.")

#----8----
var = float(input("Valor: "))
if var > 0:
    print(f"O Valor {var} é Positivo")
elif var < 0:
    print(f"O Valor {var} é Negativo")
else:
    print(f"O Valor {var} e Igual a Zero")

#----9----
var = input("Valor: ")
if var == "F" or var == "f":
    print(f"F - Feminino")
elif var == "M" or var == "m":
    print(f"M - Masculino")
else:
    print(f"Sexo Inválido.")

#----10----
var = input("Insira uma Letra: ")
var = var.upper()
vogl = {"A", "E", "I", "O", "U"}
cnst = {"B", "C", "D", "F", "G", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Z"}
if var in vogl:
    print(f"{var} é uma Vogal")
elif var in cnst:
    print(f"{var} é uma Consoante")
else:
    print(f"{var} é uma Entrada Inválida.")
