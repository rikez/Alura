# python/biblioteca.py

def gerar_convite(nome):
	convite = nome
	convite1 = convite[0:4]
	convite2 = convite[len(convite-4):len(convite)] 
	return convite1 + convite2
	
def enviar_convite(nome_f):
	print 'Atenção %s você foi convidado' % (nome_f)
	
def processa_convite(nome):
	cv = gerar_convite(nome)
	enviar_convite(cv)
