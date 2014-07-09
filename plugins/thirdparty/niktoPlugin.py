# coding=utf-8
'''
Created on 22/01/2014

#Author: Adastra.
#twitter: @jdaanial

niktoPlugin.py

niktoPlugin is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation version 2 of the License.

niktoPlugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Tortazo; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
'''

from core.tortazo.pluginManagement.BasePlugin import BasePlugin
from prettytable import PrettyTable
import subprocess

class niktoPlugin(BasePlugin):
    '''
    Class to  implement a simple plugin which prints the TOR Data structure.
    '''

    def __init__(self, torNodes=[]):
        BasePlugin.__init__(self, torNodes, 'niktoPlugin')
        self.setPluginDetails('niktoPlugin', 'Plugin to execute tests with nikto.', '1.0', 'Adastra: @jdaanial')
        if len(torNodes) > 0:
            self.info("[*] NiktoPlugin Initialized!")
            self.niktoData = {}
            for torNode in self.torNodes:
                openPorts = []
                for port in torNode.openPorts:
                    openPorts.append(port.port)
                if len(openPorts) > 0:
                    self.niktoData[torNode.host] = openPorts
            print self.niktoData

    def executeByIP(self, ipAddress, switches):
        if self.niktoData.has_key(ipAddress) == False:
            print "[-] IP Adress %s not found in the relays" %(ipAddress)
        else:
            if 80 in self.niktoData[ipAddress]:
                print "Excec..."
                proc = subprocess.Popen(["perl nikto.pl"], stdout=subprocess.PIPE, stderr=subprocess.STDOUT)
                print proc.communicate()
            else:
                print "[-] Port '80' is reported to closed in the selected relay. Please, select another port and execute: 'executeByIPOnPort'."




    def __del__(self):
        if len(self.torNodes) > 0:
            self.debug("[*] NiktoPlugin Destroyed!")

    def executeAll(self, switches):
        for torNode in self.torNodes:
            for torNodePort in torNode.openPorts:
                try:
                    if torNodePort.port == '80':
                        subprocess.call("perl nikto/nikto.pl -host "+torNode.host+" "+ switches, shell=True)
                except KeyboardInterrupt:
                    pass

    def executeAllOnPort(self, port, switches):
        for torNode in self.torNodes:
            for torNodePort in torNode.openPorts:
                try:
                    if torNodePort.port == port:
                        subprocess.call("perl nikto/nikto.pl -host "+torNode.host+" "+ switches+" -p "+port, shell=True)
                except KeyboardInterrupt:
                    pass

    def executeByNickname(self, nickname, switches):
        for torNode in self.torNodes:
            for torNodePort in torNode.openPorts:
                try:
                    if torNodePort.port == '80' and torNode.nickName == nickname:
                        subprocess.call("perl nikto/nikto.pl -host "+torNode.host+" "+ switches, shell=True)
                except KeyboardInterrupt:
                    pass

    def executeByIPOnPort(self, ipAddress, port, switches):
        for torNode in self.torNodes:
            for torNodePort in torNode.openPorts:
                try:
                    if torNodePort.port == port and torNode.host == ipAddress:
                        subprocess.call("perl nikto/nikto.pl -host "+torNode.host+" "+ switches+" -p "+port, shell=True)
                except KeyboardInterrupt:
                    pass

    def help(self):
        print "[*] Functions availaible available in the Plugin..."
        tableHelp = PrettyTable(["Function", "Description", "Example"])
        tableHelp.padding_width = 1
        tableHelp.add_row(['help', 'Help Banner', 'self.help()'])
        tableHelp.add_row(['printRelaysFound', 'Table with the relays found.', 'self.printRelaysFound()'])
        tableHelp.add_row(['executeAll', 'Execute Nikto against all TOR relays found (by default, against port 80)', 'self.executeAll("nikto_switches")'])
        tableHelp.add_row(['executeAllOnPort', 'Execute Nikto against all TOR relays found on the specified port.', 'self.executeAllOnPort(8080, "nikto_switches")'])
        tableHelp.add_row(['executeByNickname', 'Execute Nikto against the relay specified by NickName (by default, against port 80)', "self.executeByNickname('TorNodeNickName','nikto_switches')"])
        tableHelp.add_row(['executeByIP', 'Execute Nikto against the relay specified by Ip Address (by default, against port 80)', "self.executeByIP('80.80.80.80','nikto_switches')"])
        tableHelp.add_row(['executeByIPOnPort', 'Execute Nikto against the relay specified by Ip Address on the specified port', "self.executeByIPOnPort('80.80.80.80', 8080, 'nikto_switches')"])
        print tableHelp