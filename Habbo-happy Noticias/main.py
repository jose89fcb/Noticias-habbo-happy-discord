import requests, json, time

from discord_webhook import DiscordWebhook, DiscordEmbed
import discord

webhook_url = "AQUI LA URL DE TU WEBHOOK DE DISCORD" #Debes de crear un WebHook en Discord

def HabboHappyWeb():
    time.sleep(5) #Puedes ajustar el tiempo
    new = requests.get('AQUI LA URL DE TU PAGINA WEB').json() #Puedes cambiar la url por la tuya
    with open('Cache/noticias.json', 'r') as f:
        Cached = json.load(f)

    if new["noticias"]   != Cached["noticias"]:
        if new["imagen"] != Cached["imagen"]:
            if new["url"] != Cached["url"]:
                webhook = DiscordWebhook(url=webhook_url, username="Habbo-happy")
                embed = DiscordEmbed(title='')
                embed.add_embed_field(name="Habbo-happy.net",  value=f'{new["noticias"]}'+ "\n" + "\n\n\n[Ver Noticia en Habbo-happy.net]" + "("f'{new["url"]}'")")
                embed.set_image(url=f'{new["imagen"]}')
                embed.set_author(name="Noticias - Habbo-Happy", icon_url="https://pbs.twimg.com/profile_images/1163529268531531776/mEL7-TcT_400x400.png")
                webhook.add_embed(embed)
                webhook.execute()
                with open('Cache/noticias.json', 'w') as f:
                    json.dump(new, f, indent=2)

   
    


   

while True:
    print("Comprobando noticias Habbo-happy")
    HabboHappyWeb()
    

 