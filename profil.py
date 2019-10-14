import sqlalchemy as db
import pymysql
import datetime
engine = db.create_engine("mysql+pymysql://root:@localhost:3306/ipres")
connection = engine.connect()
metadata = db.MetaData()
conn = engine.connect()
employeur = db.Table('employeur', metadata, autoload=True, autoload_with=engine)
donnees = db.Table('donnees', metadata, autoload=True, autoload_with=engine)
j = employeur.join(donnees, employeur.c.id == donnees.c.idEmployeur)
result = conn.execute(employeur.select().where(employeur.c.id <= 35))
x = datetime.datetime.now()    
for rows in result:
    stm = donnees.select().where(donnees.c.idEmployeur==rows[0])
    donneesbyID = conn.execute(stm)
    a = False;
    for donnee in donneesbyID:
        diff = x.year - int(donnee[1])
        print(donnee)
        if donnee[4]>0 and diff<5:
            print(diff)
            if diff<3:
                stm1 = employeur.update().where(employeur.c.id == rows[0]).values(profil='actif')
                conn.execute(stm1)
                print('ssss')
                a = True
            elif diff<5 and a!=True:
                stm1 = employeur.update().where(employeur.c.id == rows[0]).values(profil='semi-Actif')
                conn.execute(stm1)
                a = True
                print('aaaa')
    if a !=True:
        stm1 = employeur.update().where(employeur.c.id == rows[0]).values(profil='inactif')
        conn.execute(stm1)
    print('-------')

