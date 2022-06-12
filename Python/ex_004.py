def valorPagamento(valorPrest,diasAtraso):
    return (1.03 + diasAtraso*0.001)*valorPrest

valorPrest = 1
relatolqua = 0
relatolval = 0
while valorPrest != 0:
    print("----Nova Operação----")
    valorPrest= float(input("Insira o Valor da Prestação: "))
    diasAtraso= int(input("Dias em Atraso: "))
    print(f"O Valor a Ser Pago é : {valorPagamento(valorPrest,diasAtraso)}")
    relatolqua += 1
    relatolval += valorPagamento(valorPrest,diasAtraso)
    print("----Operação Feita----")
print(f"Relatório\nValor Total das Prestações: {relatolval}\nQuantidade Total das Prestações: {relatolval}")

