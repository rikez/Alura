# -*- coding: UTF-8 -*-
# python/app.py

def cadastrar(nomes):
	print '\nDigite o nome desejado: '
	nome = raw_input()
	nomes.append(nome)
	print '\nNome adiconado com sucesso. \n'

def listarNomes(nomes):
	print '\n'
	print 'Lista:'
	for index in range(len(nomes)):
		print  '%s - %s' % (index+1,nomes[index])
	print '\n'
	
def removerNomes(nomes):
	listarNomes(nomes)
	print '\nDigite o numero do nome que desejas deletar: '
	i = raw_input()
	guarda = nomes[int(i)-1] 
	nomes.remove(guarda)
	print '\n Nome deletado com sucesso. \n'
	
def alterarNomes(nomes):
	listarNomes(nomes)
	print '\nDigite o numero do nome que desejas alterar: '
	i = raw_input()
	guarda = nomes[int(i)-1]
	nomes[int(i)-1] = raw_input()
	listarNomes(nomes)
	
def procurarNomes(nomes):
	print '\nDigite o nome que desejas procurar: '
	nome = raw_input()
	if(nome in nomes):
		print 'Achou! ' + nome
	else:
		print 'Não Encontrado!'
	
	
def menu():
	nomes = []
	escolha = ''
	while(escolha != '0'):
		print '1 - Cadastrar Nome.'
		print '2 - Listar Nomes.'
		print '3 - Remover Nome'
		print '4 - Alterar Nome'
		print '5 - Achar Nome'
		print '0 - Sair do programa.'
		escolha = raw_input()
		if(escolha == '1'):
			cadastrar(nomes)
		if(escolha == '2'):
			listarNomes(nomes)
		if(escolha == '3'):
			removerNomes(nomes)
		if(escolha == '4'):
			alterarNomes(nomes)
		if(escolha == '5'):
			procurarNomes(nomes)

menu()
